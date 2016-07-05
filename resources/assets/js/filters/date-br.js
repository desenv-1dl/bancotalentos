angular.module('app.filters')
    .filter('dateBr', ['$filter', function($filter){
        return function (input) {
            return $filter('date')(input, 'dd/MM/yyyy');
        };
    }])
    .filter('cep', ['$filter', function($filter){
        return function (input) {
            var str = input+ '';
            str = str.replace(/\D/g,'');
            str=str.replace(/^(\d{2})(\d{3})(\d)/,"$1.$2-$3");
            return str;
        };
    }])
    .filter('telefone', ['$filter', function($filter){
        return function (input) {
            var str = input+ '';
            str = str.replace(/\D/g,'');
            if(str.length === 11 ){
                str=str.replace(/^(\d{2})(\d{5})(\d{4})/,'($1) $2-$3');
            }else{
                str=str.replace(/^(\d{2})(\d{4})(\d{4})/,'($1) $2-$3');
            }
            return str;
        };
    }])
    .filter('realbrasileiro', ['$filter', function($filter){
        return function (input) {
            var tmp = input+'';
            var res = tmp.replace('.','');
            tmp = res.replace(',','');
            var neg = false;
            if(tmp.indexOf('-') === 0){
                neg = true;
                tmp = tmp.replace('-','');
            }
            if(tmp.length === 1) {
                tmp = '0'+tmp;
            }
            tmp = tmp.replace(/([0-9]{2})$/g, ',$1');
            if( tmp.length > 6){
                tmp = tmp.replace(/([0-9]{3}),([0-9]{2}$)/g, '.$1,$2');
            }
            if( tmp.length > 9){
                tmp = tmp.replace(/([0-9]{3}).([0-9]{3}),([0-9]{2}$)/g,'.$1.$2,$3');
            }
            if( tmp.length > 12){
                tmp = tmp.replace(/([0-9]{3}).([0-9]{3}).([0-9]{3}),([0-9]{2}$)/g,'.$1.$2.$3,$4');
            }
            if(tmp.indexOf('.') === 0){
                tmp = tmp.replace('.','');
            }
            if(tmp.indexOf(',') === 0){
                tmp = tmp.replace(',','0,');
            }
            return 'R$ ' + (neg ? '-'+tmp : tmp);
        };
    }])
    .filter('cpfcnpj', ['$filter', function($filter){
        return function (input) {

            var str = input + '';

            if (str.length < 12) {
                str = str.replace(/\D/g, '');
                str = str.replace(/(\d{3})(\d)/, "$1.$2");
                str = str.replace(/(\d{3})(\d)/, "$1.$2");
                str = str.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
            } else {
                str = str.replace(/\D/g, '');
                str = str.replace(/^(\d{2})(\d)/, '$1.$2');
                str = str.replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3');
                str = str.replace(/\.(\d{3})(\d)/, '.$1/$2');
                str = str.replace(/(\d{4})(\d)/, '$1-$2');
            }
            return str;
        }
    }]);
