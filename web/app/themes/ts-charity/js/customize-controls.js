( function( api ) {

	// Extends our custom "ts-charity" section.
	api.sectionConstructor['ts-charity'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );