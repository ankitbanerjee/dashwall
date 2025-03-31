// Get current theme
var dashwall_theme = localStorage.getItem( 'theme' );
// Set defaults if theme is not defined.
if ( ! dashwall_theme ) {
  localStorage.setItem( 'theme', 'light' );
  dashwall_theme = 'light';
}
// Add theme to the body.
document.body.classList.add( dashwall_theme );

// Handle onClick events
document.getElementById( 'theme-toggle' ).addEventListener( 'click', () => {
  // Cleanup classes from body.
  document.body.classList.remove( 'light' );
  document.body.classList.remove( 'dark' );
  // Change the theme.
  dashwall_theme = ( dashwall_theme === 'light' ) ? 'dark' : 'light';
  // Save the theme.
  localStorage.setItem( 'theme', dashwall_theme );
  // Apply the theme.
  document.body.classList.add( dashwall_theme );
});