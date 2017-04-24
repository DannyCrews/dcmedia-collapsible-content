/**
 * Created by dcrews on 4/16/17.
 */
;(function($, window, document, undefined) {
    'use strict';


    var $visibleContents, $hiddenContents, $icons;


    var init = function() {
        $visibleContents = $('.collapsible-content--visible');
        $hiddenContents = $visibleContents.next();
        $icons = $visibleContents.find('.collapsible-content--icon');
        $visibleContents.on('click', clickHandler);
    };

    /**
     * Click event handler
     * @param event
     */
    var clickHandler = function() {
        var index = $visibleContents.index( this ),
            $hiddenContent = $( $hiddenContents[ index ] ),
            isHiddenContentShowing = $hiddenContent.is(':visible');

        if ( isHiddenContentShowing ) {
            $hiddenContent.slideUp(1000);
        } else {
            $hiddenContent.slideDown(1000);
        }

        changeIcon( index, isHiddenContentShowing );

    };

    /*********************
     * Helper functions
     **********************/

    /**
     * Change the icon handler
     */
    function changeIcon( index, isHiddenContentShowing ) {
        var $iconElement = $( $icons[ index ] ),
            showIcon = $iconElement.data( 'showIcon' ),
            hideIcon = $iconElement.data( 'hideIcon' ),
            removeClass, addClass;

        if ( isHiddenContentShowing ) {
            addClass = showIcon;
            removeClass = hideIcon;
        } else {
            addClass = hideIcon;
            removeClass = showIcon;
        }

        $iconElement
            .removeClass( removeClass )
            .addClass( addClass );
    }

    function getIconClasses() {

    }

    $(document).ready(function() {
        init();
    });

})(jQuery, window, document);