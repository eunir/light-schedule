import type { OptionalSimpleMaskMoneyConfiguration } from 'src/types';
/**
 * It removes any non-numeric characters from the input string and returns a number.
 * It takes a number or string as input.
 *
 * @remarks
 * This method is part of the {@link https://github.com/codermarcos/simple-mask-money/ | SimpleMaskMoney} to see the full documentation check {@link https://github.com/codermarcos/simple-mask-money/tree/main/examples/4.x.x#formattonumber | SimpleMaskMoney.formatToNumber}
 *
 * @param {string | number} value - The first can be a number or string
 * @param {Partial<SimpleMaskMoneyConfiguration>} configuration - The second is an object with the configuration to check options visit {@link https://github.com/codermarcos/simple-mask-money/tree/main/examples/4.x.x#simplemaskMoneyconfiguration | SimpleMaskMoneyConfiguration}
 * @returns {number} A number with any non-numeric characters removed e.g when receive `$0.66` return `0,66`
 *
 * @example
 * Here's an example using from cdn with CSSSelector:
 * ```html
 * <script src=""></script>
 *
 * <script>
 *     const value = SimpleMaskMoney.formatToNumber('$666,99');
 *     // Before save convert to number
 *     console.log(value); // 666.99
 * </script>
 * ```
 *
 * @example
 * Here's an example using from npm with ESmodules:
 * ```jsx
 * import { formatToCurrency } from 'simple-mask-money';
 *
 * const value = formatToNumber('$666,99');
 * // Before save convert to number
 * console.log(value); // 666.99
 * ```
 */
declare function formatToNumber(value: string | number, configuration?: OptionalSimpleMaskMoneyConfiguration): number;
export default formatToNumber;
/**
 * Check the {@link https://github.com/codermarcos/simple-mask-money/tree/main/examples/4.x.x#formattonumber | SimpleMaskMoney.formatToNumber} method to get more information about this type
 *
 * @remarks
 * This type is part of the {@link https://github.com/codermarcos/simple-mask-money/ | SimpleMaskMoney} to see the full documentation check {@link https://github.com/codermarcos/simple-mask-money/tree/main/examples/4.x.x#formattonumber | SimpleMaskMoney.formatToNumber}
 */
export type FormatToNumberFunction = typeof formatToNumber;
