import type { HTMLInputElementMasked } from './types';
/**
 * It removes a mask from an input element.
 * It takes an input element or selector string as a parameter and returns a function that removes the mask from the input element.
 *
 * @remarks
 * This method is part of the {@link https://github.com/codermarcos/simple-mask-money/ | SimpleMaskMoney} to see the full documentation check {@link https://github.com/codermarcos/simple-mask-money/tree/main/examples/4.x.x#removemask | SimpleMaskMoney.removeMask}
 *
 * @param {HTMLInputElementMasked | HTMLInputElement | string | null} input - The input element or selector string.
 * @returns {() => void} A function that removes the mask from the input element.
 */
declare function removeMask(input: HTMLInputElementMasked | HTMLInputElement | string | null): () => void;
export default removeMask;
/**
 * Check the {@link https://github.com/codermarcos/simple-mask-money/tree/main/examples/4.x.x#removemask | SimpleMaskMoney.removeMask} method to get more information about this type
 *
 * @remarks
 * This type is part of the {@link https://github.com/codermarcos/simple-mask-money/ | SimpleMaskMoney} to see the full documentation check {@link https://github.com/codermarcos/simple-mask-money/tree/main/examples/4.x.x#removemask | SimpleMaskMoney.removeMask}
 *
 */
export type RemoveMaskFunction = typeof removeMask;
