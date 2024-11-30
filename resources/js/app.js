import './bootstrap';
import 'flowbite';
import SimpleMaskMoney from "simple-mask-money";

// $('.money').maskMoney({prefix:'R$ ', allowNegative: true, thousands:'.', decimal:',', affixesStay: true})
SimpleMaskMoney.setMask('.money');

