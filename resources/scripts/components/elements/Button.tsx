import React from 'react';
import tw, { css, styled } from 'twin.macro';
import Spinner from '@/components/elements/Spinner';

interface Props {
    isLoading?: boolean;
    size?: 'inline' | 'xsmall' | 'small' | 'large' | 'xlarge';
    color?: 'green' | 'red' | 'primary' | 'grey';
    isSecondary?: boolean;
}

const ButtonStyle = styled.button<Props>`
    ${tw`relative inline-block rounded p-2 tracking-wide text-sm transition-all duration-150 border`};
  
    ${props => ((!props.isSecondary && !props.color) || props.color === 'primary') && css<Props>`
        ${props => !props.isSecondary && tw`bg-primary-500 border-primary-600 border text-primary-50`};

        &:hover:not(:disabled) {
            ${tw`bg-primary-600 border-primary-700`};
        }
    `};

    ${props => props.color === 'grey' && css`
        ${tw`border-neutral-600 bg-neutral-500 text-neutral-50`};

        &:hover:not(:disabled) {
            ${tw`bg-neutral-600 border-neutral-700`};
        }
    `};

    ${props => props.color === 'green' && css<Props>`
        ${tw`border-green-600 bg-green-500 text-green-50`};

        &:hover:not(:disabled) {
            ${tw`bg-green-600 border-green-700`};
        }

        ${props => props.isSecondary && css`
            &:active:not(:disabled) {
                ${tw`bg-green-600 border-green-700`};
            }
        `};
    `};

    ${props => props.color === 'red' && css<Props>`
        ${tw`border-red-600 bg-red-500 text-red-50`};

        &:hover:not(:disabled) {
            ${tw`bg-red-600 border-red-700`};
        }

        ${props => props.isSecondary && css`
            &:active:not(:disabled) {
                ${tw`bg-red-600 border-red-700`};
            }
        `};
    `};

    ${props => props.size === 'inline' && tw`p-1 text-xs`};
    ${props => props.size === 'xsmall' && tw`p-2 text-xs`};
    ${props => (!props.size || props.size === 'small') && tw`p-3`};
    ${props => props.size === 'large' && tw`p-4 text-sm`};
    ${props => props.size === 'xlarge' && tw`p-4 w-full`};

    ${props => props.isSecondary && css<Props>`
        ${tw`border-neutral-600 bg-transparent text-neutral-200`};

        &:hover:not(:disabled) {
            ${tw`border-neutral-500 text-neutral-100`};
            ${props => props.color === 'red' && tw`bg-red-500 border-red-600 text-red-50`};
            ${props => props.color === 'primary' && tw`bg-primary-500 border-primary-600 text-primary-50`};
            ${props => props.color === 'green' && tw`bg-green-500 border-green-600 text-green-50`};
        }
    `};
  
    ${props => props.isLoading && tw`text-transparent`};

    &:disabled {
      ${tw`opacity-75 cursor-not-allowed`};
    }
`;

type ComponentProps = Omit<JSX.IntrinsicElements['button'], 'ref' | keyof Props> & Props;

const Button: React.FC<ComponentProps> = ({ children, isLoading, disabled, ...props }) => (
    <ButtonStyle {...props} isLoading={isLoading} disabled={isLoading || disabled}>
        {isLoading &&
        <div css={tw`flex absolute justify-center items-center w-full h-full left-0 top-0`}>
            <Spinner size={'small'}/>
        </div>
        }
        {children}
    </ButtonStyle>
);

type LinkProps = Omit<JSX.IntrinsicElements['a'], keyof JSX.IntrinsicElements['button'] | keyof Props> & Props;

const LinkButton: React.FC<LinkProps> = props => <ButtonStyle as={'a'} {...props}/>;

export { LinkButton, ButtonStyle };
export default Button;
