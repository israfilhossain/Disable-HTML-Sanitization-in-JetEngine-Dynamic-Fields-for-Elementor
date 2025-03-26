// 1. Double-Check the Class Name
// Make sure that the Dynamic Field widget where you want to disable sanitization has the exact class name disable-sanitize applied.

// 2. Use the_content Filter Instead (If Needed)
// If the issue persists, try applying the_content filter to allow full HTML rendering:

<?php
add_filter( 'jet-engine/listings/dynamic-field/sanitize-output', function( $result, $df ) {
    if ( false !== strpos( $df->get( '_css_classes' ), 'disable-sanitize' ) ) {
        $result = false;
    }
    return $result;
}, 0, 2 );
