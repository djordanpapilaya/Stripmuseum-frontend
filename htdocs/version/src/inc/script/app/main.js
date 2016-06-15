///<reference path='../def/definitions.d.ts' />
/**
 * Created by MacBookDjordan on 19/02/16.
 */
define(["require", "exports"], function (require, exports) {
    var Main = (function () {
        function Main() {
            this.init();
        }
        Main.prototype.init = function () {
            $("a").on("mousedown", function (e) {
                return $(e.target).addClass("is-mouse-down");
            }).on("mouseup", function (e) {
                return $(e.target).removeClass("is-mouse-down");
            });
            $("#scroll_top").on("click", function (e) {
                e.preventDefault();
                scrollTo(document.body, 0, 600);
            });
            function scrollTo(element, to, duration) {
                if (duration <= 0) {
                    return;
                }
                var difference = to - element.scrollTop;
                var perTick = difference / duration * 10;
                setTimeout(function () {
                    element.scrollTop = element.scrollTop + perTick;
                    if (element.scrollTop == to) {
                        return;
                    }
                    scrollTo(element, to, duration - 10);
                }, 10);
            }
        };
        return Main;
    })();
    Object.defineProperty(exports, "__esModule", { value: true });
    exports.default = Main;
});
