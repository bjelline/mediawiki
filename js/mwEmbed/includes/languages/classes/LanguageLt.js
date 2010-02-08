

/** Lithuanian (Lietuvių)
 *
 * @ingroup Language
 */
	/* Word forms (with examples):
		1 - vienas (1) lapas, dvidešimt vienas (21) lapas
		2 - trys (3) lapai
		3 - penkiolika (15) lapų
	*/
	mw.lang.convertPlural = function( count, forms ) {
		

		//if no number with word, then use $form[0] for singular and $form[1] for plural or zero
		if( forms.length === 2 ) return count == 1 ? forms[0] : forms[1];

		forms = mw.lang.preConvertPlural( forms, 3 );

		if (count%10==1 && count%100!=11) return forms[0];
		if (count%10>=2 && (count%100<10 || count%100>=20)) return forms[1];
		return forms[2];
	}
