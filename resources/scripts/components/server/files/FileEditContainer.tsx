import React, { useEffect, useState } from 'react';
import { useHistory, useLocation, useParams } from 'react-router';
import { dirname } from 'path';
import tw from 'twin.macro';
import { httpErrorToHuman } from '@/api/http';
import getFileContents from '@/api/server/files/getFileContents';
import saveFileContents from '@/api/server/files/saveFileContents';
import Can from '@/components/elements/Can';
import Editor, { modes } from '@/components/elements/Editor';
import ErrorBoundary from '@/components/elements/ErrorBoundary';
import FlashMessageRender from '@/components/FlashMessageRender';
import Button from '@/components/elements/Button';
import PageContentBlock from '@/components/elements/PageContentBlock';
import { ServerError } from '@/components/elements/ScreenBlock';
import Select from '@/components/elements/Select';
import SpinnerOverlay from '@/components/elements/SpinnerOverlay';
import FileManagerBreadcrumbs from '@/components/server/files/FileManagerBreadcrumbs';
import FileNameModal from '@/components/server/files/FileNameModal';
import useFlash from '@/plugins/useFlash';
import { ServerContext } from '@/state/server';
import { encodePathSegments, hashToPath } from '@/helpers';

export default () => {
    const [ error, setError ] = useState('');
    const { action } = useParams<{ action: 'new' | string }>();
    const [ loading, setLoading ] = useState(action === 'edit');
    const [ content, setContent ] = useState('');
    const [ modalVisible, setModalVisible ] = useState(false);
    const [ mode, setMode ] = useState<string>('text/plain');

    const history = useHistory();
    const { hash } = useLocation();

    const id = ServerContext.useStoreState(state => state.server.data!.id);
    const uuid = ServerContext.useStoreState(state => state.server.data!.uuid);
    const setDirectory = ServerContext.useStoreActions(actions => actions.files.setDirectory);
    const { addError, clearFlashes } = useFlash();

    let fetchFileContent: (() => Promise<string>) | null = null;

    useEffect(() => {
        if (action === 'new') return;

        setError('');
        setLoading(true);
        const path = hashToPath(hash);
        setDirectory(dirname(path));
        getFileContents(uuid, path)
            .then(setContent)
            .catch(error => {
                console.error(error);
                setError(httpErrorToHuman(error));
            })
            .then(() => setLoading(false));
    }, [ action, uuid, hash ]);

    const save = (name?: string) => {
        if (!fetchFileContent) {
            return;
        }

        setLoading(true);
        clearFlashes('files:view');
        fetchFileContent()
            .then(content => saveFileContents(uuid, name || hashToPath(hash), content))
            .then(() => {
                if (name) {
                    history.push(`/server/${id}/files/edit#/${encodePathSegments(name)}`);
                    return;
                }

                return Promise.resolve();
            })
            .catch(error => {
                console.error(error);
                addError({ key: 'files:view', message: httpErrorToHuman(error) });
            })
            .then(() => setLoading(false));
    };

    if (error) {
        return (
            <ServerError message={error} onBack={() => history.goBack()}/>
        );
    }

    return (
        <PageContentBlock>
            <FlashMessageRender byKey={'files:view'} css={tw`mb-4`}/>
            <ErrorBoundary>
                <div css={tw`mb-4`}>
                    <FileManagerBreadcrumbs withinFileEditor isNewFile={action !== 'edit'}/>
                </div>
            </ErrorBoundary>
            {hash.replace(/^#/, '').endsWith('.pteroignore') &&
            <div css={tw`mb-4 p-4 border-l-4 bg-neutral-900 rounded border-cyan-400`}>
                <p css={tw`text-neutral-300 text-sm`}>
                    You&apos;re editing
                    a <code css={tw`font-mono bg-black rounded py-px px-1`}>.pteroignore</code> file.
                    Any files or directories listed in here will be excluded from backups. Wildcards are supported by
                    using an asterisk (<code css={tw`font-mono bg-black rounded py-px px-1`}>*</code>). You can
                    negate a prior rule by prepending an exclamation point
                    (<code css={tw`font-mono bg-black rounded py-px px-1`}>!</code>).
                </p>
            </div>
            }
            <FileNameModal
                visible={modalVisible}
                onDismissed={() => setModalVisible(false)}
                onFileNamed={(name) => {
                    setModalVisible(false);
                    save(name);
                }}
            />
            <div css={tw`relative`}>
                <SpinnerOverlay visible={loading}/>
                <Editor
                    style={{ height: 'calc(100vh - 20rem)' }}
                    overrides={tw`rounded h-full`}
                    initialContent={content}
                    filename={hash.replace(/^#/, '')}
                    onModeChanged={m => setMode(m.mime)}
                    fetchContent={value => {
                        fetchFileContent = value;
                    }}
                    onContentSaved={() => {
                        if (action !== 'edit') {
                            setModalVisible(true);
                        } else {
                            save();
                        }
                    }}
                />
            </div>
            <div css={tw`flex justify-end mt-4`}>
                <div css={tw`flex-1 sm:flex-none rounded bg-neutral-900 mr-4`}>
                    <Select value={mode} onChange={e => setMode(e.currentTarget.value)}>
                        {modes.map(mode => (
                            <option key={`${mode.name}_${mode.mime}`} value={mode.mime}>
                                {mode.name}
                            </option>
                        ))}
                    </Select>
                </div>
                {action === 'edit' ?
                    <Can action={'file.update'}>
                        <Button css={tw`flex-1 sm:flex-none`} onClick={() => save()}>
                            Save Content
                        </Button>
                    </Can>
                    :
                    <Can action={'file.create'}>
                        <Button css={tw`flex-1 sm:flex-none`} onClick={() => setModalVisible(true)}>
                            Create File
                        </Button>
                    </Can>
                }
            </div>
        </PageContentBlock>
    );
};
