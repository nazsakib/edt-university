import $ from "jquery";

class Search {
    // 1 - descrive our object
    constructor() {
        this.openButton = $(".js-search-trigger");
        this.closeButton = $(".search-overlay__close");
        this.searchOverlay = $(".search-overlay");
        this.fullBody = $(body);
        this.events();
    }

    // 2. all events
    events() {
        this.openButton.on("click", this.openOverlay.bind(this));
        this.closeButton.on("click", this.closeOverlay.bind(this));
        $(document).on("keyup", this.keyPressFunction.bind(this));
    }

    // 3. methods ( function, action )
    openOverlay() {
        this.searchOverlay.addClass("search-overlay--active");
        this.fullBody.addClass("body-no-scroll");
    }
    closeOverlay() {
        this.searchOverlay.removeClass("search-overlay--active");
        $("body").removeClass("body-no-scroll");
    }
    keyPressFunction() {
        console.log("hello");
    }
}

export default Search;
