import type { OptionalSimpleMaskMoneyConfiguration } from 'src/types';
/**
 * It returns a the same function received but now It has default values for the configuration parameter. Allowing you to create instances of a function with different configurations without modifying the original function.
 * It takes two parameters some function of SimpleMaskMoney and configuration
 *
 * @remarks
 * This method is part of the {@link https://github.com/codermarcos/simple-mask-money/ | SimpleMaskMoney} to see the full documentation check {@link https://github.com/codermarcos/simple-mask-money/tree/main/examples/4.x.x#createinstanceof | SimpleMaskMoney.setMask}
 *
 * @param {<P, R>(param: P, configuration?: OptionalSimpleMaskMoneyConfiguration) => R} fn - The first must be the function which you will use
 * @param {Partial<SimpleMaskMoneyConfiguration>} configuration - The second is an object with the configuration to check options visit {@link https://github.com/codermarcos/simple-mask-money/tree/main/examples/4.x.x#simplemaskmoneyconfiguration | SimpleMaskMoneyConfiguration}
 * @returns {<P, R>(param: P, configuration?: OptionalSimpleMaskMoneyConfiguration) => R} A new function to use with default values
 *
 * @example
 * Here's an example using from cdn with Vanilla JS:
 * ```html
 * <script src=""></script>
 *
 * <input id="my-input" />
 *
 * <script>
 *   const { createInstanceOf, setMask } = SimpleMaskMoney;
 *   const configuration = {
 *     // Your configuration here
 *   };
 *   const setMask = createInstanceOf(setMask, configuration);
 *   const remove = setMask('#my-input'); // Now this method is with the same parameters passed before
 * </script>
 * ```
 *
 * @example
 * Here's an example using from npm with ESmodules:
 * ```javascript
 * import { createInstanceOf, setMask } from 'simple-mask-money';
 * const configuration = {
 *   // Your configuration here
 * };
 * const setMask = createInstanceOf(setMask, configuration);
 * const remove = setMask('#my-input'); // Now this method is with the same parameters passed before
 * ```
 */
declare function createInstanceOf<P, R>(fn: (param: P, configuration?: OptionalSimpleMaskMoneyConfiguration) => R, configuration: OptionalSimpleMaskMoneyConfiguration): (param: P, configuration?: OptionalSimpleMaskMoneyConfiguration) => R;
export default createInstanceOf;
/**
 * Check the {@link https://github.com/codermarcos/simple-mask-money/tree/main/examples/4.x.x#createinstanceof | SimpleMaskMoney.createInstanceOf} method to get more information about this type
 *
 * @remarks
 * This type is part of the {@link https://github.com/codermarcos/simple-mask-money/ | SimpleMaskMoney} to see the full documentation check {@link https://github.com/codermarcos/simple-mask-money/tree/main/examples/4.x.x#createinstanceof | SimpleMaskMoney.createInstanceOf}
 *
 */
export type CreateInstanceOfFunction = typeof createInstanceOf;
