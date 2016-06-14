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
            $("body").on("mousedown", function (e) {
                return $(e.target).addClass("is-mouse-down");
            }).on("mouseup", function (e) {
                return $(e.target).removeClass("is-mouse-down");
            });
        };
        return Main;
    })();
    Object.defineProperty(exports, "__esModule", { value: true });
    exports.default = Main;
});
