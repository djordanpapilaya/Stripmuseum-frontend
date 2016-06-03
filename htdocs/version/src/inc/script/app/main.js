/**
 * Created by MacBookDjordan on 19/02/16.
 */
define(["require", "exports"], function (require, exports) {
    var Main = (function () {
        function Main() {
            this.init();
            console.log('JDJJD');
        }
        Main.prototype.init = function () {
            this.parallexFunctionality();
        };
        Main.prototype.parallexFunctionality = function () {
            var jumboHeight = $('.jumbotron').outerHeight();
            function parallax() {
                var scrolled = $(window).scrollTop();
                $('.bg').css('height', (jumboHeight - scrolled) + 'px');
            }
            $(window).scroll(function (e) {
                parallax();
            });
        };
        return Main;
    })();
    Object.defineProperty(exports, "__esModule", { value: true });
    exports.default = Main;
});
