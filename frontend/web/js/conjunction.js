
$(document).ready(function() {
	rgpms = {
		'I-m':document.getElementById('verbsr-conjunction-rgp-i-m'),
		'I-f':document.getElementById('verbsr-conjunction-rgp-i-f'),
		'I-n':document.getElementById('verbsr-conjunction-rgp-i-n'),

		'We-m':document.getElementById('verbsr-conjunction-rgp-we-m'),
		'We-f':document.getElementById('verbsr-conjunction-rgp-we-f'),
		'We-n':document.getElementById('verbsr-conjunction-rgp-we-n'),
	}

	perfekat = {
		'I-m':document.getElementById('verbsr-conjunction-perfekat-i-m'),
		'I-f':document.getElementById('verbsr-conjunction-perfekat-i-f'),
		'I-n':document.getElementById('verbsr-conjunction-perfekat-i-n'),
		'Thou-m':document.getElementById('verbsr-conjunction-perfekat-thou-m'),
		'Thou-f':document.getElementById('verbsr-conjunction-perfekat-thou-f'),
		'Thou-n':document.getElementById('verbsr-conjunction-perfekat-thou-n'),
		'HeSheIt-m':document.getElementById('verbsr-conjunction-perfekat-hesheit-m'),
		'HeSheIt-f':document.getElementById('verbsr-conjunction-perfekat-hesheit-f'),
		'HeSheIt-n':document.getElementById('verbsr-conjunction-perfekat-hesheit-n'),

		'We-m':document.getElementById('verbsr-conjunction-perfekat-we-m'),
		'We-f':document.getElementById('verbsr-conjunction-perfekat-we-f'),
		'We-n':document.getElementById('verbsr-conjunction-perfekat-we-n'),
		'You-m':document.getElementById('verbsr-conjunction-perfekat-you-m'),
		'You-f':document.getElementById('verbsr-conjunction-perfekat-you-f'),
		'You-n':document.getElementById('verbsr-conjunction-perfekat-you-n'),
		'They-m':document.getElementById('verbsr-conjunction-perfekat-they-m'),
		'They-f':document.getElementById('verbsr-conjunction-perfekat-they-f'),
		'They-n':document.getElementById('verbsr-conjunction-perfekat-they-n'),
	}

	pluskvamperfekat1 = {
		'I-m':document.getElementById('verbsr-conjunction-pluskvamperfekat1-i-m'),
		'I-f':document.getElementById('verbsr-conjunction-pluskvamperfekat1-i-f'),
		'I-n':document.getElementById('verbsr-conjunction-pluskvamperfekat1-i-n'),
		'Thou-m':document.getElementById('verbsr-conjunction-pluskvamperfekat1-thou-m'),
		'Thou-f':document.getElementById('verbsr-conjunction-pluskvamperfekat1-thou-f'),
		'Thou-n':document.getElementById('verbsr-conjunction-pluskvamperfekat1-thou-n'),
		'HeSheIt-m':document.getElementById('verbsr-conjunction-pluskvamperfekat1-hesheit-m'),
		'HeSheIt-f':document.getElementById('verbsr-conjunction-pluskvamperfekat1-hesheit-f'),
		'HeSheIt-n':document.getElementById('verbsr-conjunction-pluskvamperfekat1-hesheit-n'),

		'We-m':document.getElementById('verbsr-conjunction-pluskvamperfekat1-we-m'),
		'We-f':document.getElementById('verbsr-conjunction-pluskvamperfekat1-we-f'),
		'We-n':document.getElementById('verbsr-conjunction-pluskvamperfekat1-we-n'),
		'You-m':document.getElementById('verbsr-conjunction-pluskvamperfekat1-you-m'),
		'You-f':document.getElementById('verbsr-conjunction-pluskvamperfekat1-you-f'),
		'You-n':document.getElementById('verbsr-conjunction-pluskvamperfekat1-you-n'),
		'They-m':document.getElementById('verbsr-conjunction-pluskvamperfekat1-they-m'),
		'They-f':document.getElementById('verbsr-conjunction-pluskvamperfekat1-they-f'),
		'They-n':document.getElementById('verbsr-conjunction-pluskvamperfekat1-they-n'),
	}

	pluskvamperfekat2 = {
		'I-m':document.getElementById('verbsr-conjunction-pluskvamperfekat2-i-m'),
		'I-f':document.getElementById('verbsr-conjunction-pluskvamperfekat2-i-f'),
		'I-n':document.getElementById('verbsr-conjunction-pluskvamperfekat2-i-n'),
		'Thou-m':document.getElementById('verbsr-conjunction-pluskvamperfekat2-thou-m'),
		'Thou-f':document.getElementById('verbsr-conjunction-pluskvamperfekat2-thou-f'),
		'Thou-n':document.getElementById('verbsr-conjunction-pluskvamperfekat2-thou-n'),
		'HeSheIt-m':document.getElementById('verbsr-conjunction-pluskvamperfekat2-hesheit-m'),
		'HeSheIt-f':document.getElementById('verbsr-conjunction-pluskvamperfekat2-hesheit-f'),
		'HeSheIt-n':document.getElementById('verbsr-conjunction-pluskvamperfekat2-hesheit-n'),

		'We-m':document.getElementById('verbsr-conjunction-pluskvamperfekat2-we-m'),
		'We-f':document.getElementById('verbsr-conjunction-pluskvamperfekat2-we-f'),
		'We-n':document.getElementById('verbsr-conjunction-pluskvamperfekat2-we-n'),
		'You-m':document.getElementById('verbsr-conjunction-pluskvamperfekat2-you-m'),
		'You-f':document.getElementById('verbsr-conjunction-pluskvamperfekat2-you-f'),
		'You-n':document.getElementById('verbsr-conjunction-pluskvamperfekat2-you-n'),
		'They-m':document.getElementById('verbsr-conjunction-pluskvamperfekat2-they-m'),
		'They-f':document.getElementById('verbsr-conjunction-pluskvamperfekat2-they-f'),
		'They-n':document.getElementById('verbsr-conjunction-pluskvamperfekat2-they-n'),
	}

	pluskvamperfekat3 = {
		'I-m':document.getElementById('verbsr-conjunction-pluskvamperfekat3-i-m'),
		'I-f':document.getElementById('verbsr-conjunction-pluskvamperfekat3-i-f'),
		'I-n':document.getElementById('verbsr-conjunction-pluskvamperfekat3-i-n'),
		'Thou-m':document.getElementById('verbsr-conjunction-pluskvamperfekat3-thou-m'),
		'Thou-f':document.getElementById('verbsr-conjunction-pluskvamperfekat3-thou-f'),
		'Thou-n':document.getElementById('verbsr-conjunction-pluskvamperfekat3-thou-n'),
		'HeSheIt-m':document.getElementById('verbsr-conjunction-pluskvamperfekat3-hesheit-m'),
		'HeSheIt-f':document.getElementById('verbsr-conjunction-pluskvamperfekat3-hesheit-f'),
		'HeSheIt-n':document.getElementById('verbsr-conjunction-pluskvamperfekat3-hesheit-n'),

		'We-m':document.getElementById('verbsr-conjunction-pluskvamperfekat3-we-m'),
		'We-f':document.getElementById('verbsr-conjunction-pluskvamperfekat3-we-f'),
		'We-n':document.getElementById('verbsr-conjunction-pluskvamperfekat3-we-n'),
		'You-m':document.getElementById('verbsr-conjunction-pluskvamperfekat3-you-m'),
		'You-f':document.getElementById('verbsr-conjunction-pluskvamperfekat3-you-f'),
		'You-n':document.getElementById('verbsr-conjunction-pluskvamperfekat3-you-n'),
		'They-m':document.getElementById('verbsr-conjunction-pluskvamperfekat3-they-m'),
		'They-f':document.getElementById('verbsr-conjunction-pluskvamperfekat3-they-f'),
		'They-n':document.getElementById('verbsr-conjunction-pluskvamperfekat3-they-n'),
	}

	potencijal = {
		'I-m':document.getElementById('verbsr-conjunction-potencijal-i-m'),
		'I-f':document.getElementById('verbsr-conjunction-potencijal-i-f'),
		'I-n':document.getElementById('verbsr-conjunction-potencijal-i-n'),
		'Thou-m':document.getElementById('verbsr-conjunction-potencijal-thou-m'),
		'Thou-f':document.getElementById('verbsr-conjunction-potencijal-thou-f'),
		'Thou-n':document.getElementById('verbsr-conjunction-potencijal-thou-n'),
		'HeSheIt-m':document.getElementById('verbsr-conjunction-potencijal-hesheit-m'),
		'HeSheIt-f':document.getElementById('verbsr-conjunction-potencijal-hesheit-f'),
		'HeSheIt-n':document.getElementById('verbsr-conjunction-potencijal-hesheit-n'),

		'We-m':document.getElementById('verbsr-conjunction-potencijal-we-m'),
		'We-f':document.getElementById('verbsr-conjunction-potencijal-we-f'),
		'We-n':document.getElementById('verbsr-conjunction-potencijal-we-n'),
		'You-m':document.getElementById('verbsr-conjunction-potencijal-you-m'),
		'You-f':document.getElementById('verbsr-conjunction-potencijal-you-f'),
		'You-n':document.getElementById('verbsr-conjunction-potencijal-you-n'),
		'They-m':document.getElementById('verbsr-conjunction-potencijal-they-m'),
		'They-f':document.getElementById('verbsr-conjunction-potencijal-they-f'),
		'They-n':document.getElementById('verbsr-conjunction-potencijal-they-n'),
	}

	potencijalprosli = {
		'I-m':document.getElementById('verbsr-conjunction-potencijalprosli-i-m'),
		'I-f':document.getElementById('verbsr-conjunction-potencijalprosli-i-f'),
		'I-n':document.getElementById('verbsr-conjunction-potencijalprosli-i-n'),
		'Thou-m':document.getElementById('verbsr-conjunction-potencijalprosli-thou-m'),
		'Thou-f':document.getElementById('verbsr-conjunction-potencijalprosli-thou-f'),
		'Thou-n':document.getElementById('verbsr-conjunction-potencijalprosli-thou-n'),
		'HeSheIt-m':document.getElementById('verbsr-conjunction-potencijalprosli-hesheit-m'),
		'HeSheIt-f':document.getElementById('verbsr-conjunction-potencijalprosli-hesheit-f'),
		'HeSheIt-n':document.getElementById('verbsr-conjunction-potencijalprosli-hesheit-n'),

		'We-m':document.getElementById('verbsr-conjunction-potencijalprosli-we-m'),
		'We-f':document.getElementById('verbsr-conjunction-potencijalprosli-we-f'),
		'We-n':document.getElementById('verbsr-conjunction-potencijalprosli-we-n'),
		'You-m':document.getElementById('verbsr-conjunction-potencijalprosli-you-m'),
		'You-f':document.getElementById('verbsr-conjunction-potencijalprosli-you-f'),
		'You-n':document.getElementById('verbsr-conjunction-potencijalprosli-you-n'),
		'They-m':document.getElementById('verbsr-conjunction-potencijalprosli-they-m'),
		'They-f':document.getElementById('verbsr-conjunction-potencijalprosli-they-f'),
		'They-n':document.getElementById('verbsr-conjunction-potencijalprosli-they-n'),
	}

	futur2 = {
		'I-m':document.getElementById('verbsr-conjunction-futur2-i-m'),
		'I-f':document.getElementById('verbsr-conjunction-futur2-i-f'),
		'I-n':document.getElementById('verbsr-conjunction-futur2-i-n'),
		'Thou-m':document.getElementById('verbsr-conjunction-futur2-thou-m'),
		'Thou-f':document.getElementById('verbsr-conjunction-futur2-thou-f'),
		'Thou-n':document.getElementById('verbsr-conjunction-futur2-thou-n'),
		'HeSheIt-m':document.getElementById('verbsr-conjunction-futur2-hesheit-m'),
		'HeSheIt-f':document.getElementById('verbsr-conjunction-futur2-hesheit-f'),
		'HeSheIt-n':document.getElementById('verbsr-conjunction-futur2-hesheit-n'),

		'We-m':document.getElementById('verbsr-conjunction-futur2-we-m'),
		'We-f':document.getElementById('verbsr-conjunction-futur2-we-f'),
		'We-n':document.getElementById('verbsr-conjunction-futur2-we-n'),
		'You-m':document.getElementById('verbsr-conjunction-futur2-you-m'),
		'You-f':document.getElementById('verbsr-conjunction-futur2-you-f'),
		'You-n':document.getElementById('verbsr-conjunction-futur2-you-n'),
		'They-m':document.getElementById('verbsr-conjunction-futur2-they-m'),
		'They-f':document.getElementById('verbsr-conjunction-futur2-they-f'),
		'They-n':document.getElementById('verbsr-conjunction-futur2-they-n'),
	}

	aorist = {
		'I-m':document.getElementById('verbsr-conjunction-futur2-i-m'),
		'I-f':document.getElementById('verbsr-conjunction-futur2-i-f'),
		'I-n':document.getElementById('verbsr-conjunction-futur2-i-n'),
		'Thou-m':document.getElementById('verbsr-conjunction-futur2-thou-m'),
		'Thou-f':document.getElementById('verbsr-conjunction-futur2-thou-f'),
		'Thou-n':document.getElementById('verbsr-conjunction-futur2-thou-n'),
		'HeSheIt-m':document.getElementById('verbsr-conjunction-futur2-hesheit-m'),
		'HeSheIt-f':document.getElementById('verbsr-conjunction-futur2-hesheit-f'),
		'HeSheIt-n':document.getElementById('verbsr-conjunction-futur2-hesheit-n'),

		'We-m':document.getElementById('verbsr-conjunction-futur2-we-m'),
		'We-f':document.getElementById('verbsr-conjunction-futur2-we-f'),
		'We-n':document.getElementById('verbsr-conjunction-futur2-we-n'),
		'You-m':document.getElementById('verbsr-conjunction-futur2-you-m'),
		'You-f':document.getElementById('verbsr-conjunction-futur2-you-f'),
		'You-n':document.getElementById('verbsr-conjunction-futur2-you-n'),
		'They-m':document.getElementById('verbsr-conjunction-futur2-they-m'),
		'They-f':document.getElementById('verbsr-conjunction-futur2-they-f'),
		'They-n':document.getElementById('verbsr-conjunction-futur2-they-n'),
	}


})

function rgpf() {

	perfekaty = {
		'I-m':'сам' + ' ' + rgpms['I-m'].value,
		'I-f':'сам' + ' ' + rgpms['I-f'].value,
		'I-n':'сам' + ' ' + rgpms['I-n'].value,
		'Thou-m':'си' + ' ' + rgpms['I-m'].value,
		'Thou-f':'си' + ' ' + rgpms['I-f'].value,
		'Thou-n':'си' + ' ' + rgpms['I-n'].value,
		'HeSheIt-m':'је' + ' ' + rgpms['I-m'].value,
		'HeSheIt-f':'је' + ' ' + rgpms['I-f'].value,
		'HeSheIt-n':'је' + ' ' + rgpms['I-n'].value,

		'We-m':'смо' + ' ' + rgpms['We-m'].value,
		'We-f':'смо' + ' ' + rgpms['We-f'].value,
		'We-n':'смо' + ' ' + rgpms['We-n'].value,
		'You-m':'сте' + ' ' + rgpms['We-m'].value,
		'You-f':'сте' + ' ' + rgpms['We-f'].value,
		'You-n':'сте' + ' ' + rgpms['We-n'].value,
		'They-m':'су' + ' ' + rgpms['We-m'].value,
		'They-f':'су' + ' ' + rgpms['We-f'].value,
		'They-n':'су' + ' ' + rgpms['We-n'].value,
	};

	pluskvamperfekat1y = {
		'I-m':'сам био' + ' ' + rgpms['I-m'].value,
		'I-f':'сам био' + ' ' + rgpms['I-f'].value,
		'I-n':'сам био' + ' ' + rgpms['I-n'].value,
		'Thou-m':'си био' + ' ' + rgpms['I-m'].value,
		'Thou-f':'си био' + ' ' + rgpms['I-f'].value,
		'Thou-n':'си био' + ' ' + rgpms['I-n'].value,
		'HeSheIt-m':'је био' + ' ' + rgpms['I-m'].value,
		'HeSheIt-f':'је био' + ' ' + rgpms['I-f'].value,
		'HeSheIt-n':'је био' + ' ' + rgpms['I-n'].value,

		'We-m':'смо били' + ' ' + rgpms['We-m'].value,
		'We-f':'смо били' + ' ' + rgpms['We-f'].value,
		'We-n':'смо били' + ' ' + rgpms['We-n'].value,
		'You-m':'сте били' + ' ' + rgpms['We-m'].value,
		'You-f':'сте били' + ' ' + rgpms['We-f'].value,
		'You-n':'сте били' + ' ' + rgpms['We-n'].value,
		'They-m':'су били' + ' ' + rgpms['We-m'].value,
		'They-f':'су били' + ' ' + rgpms['We-f'].value,
		'They-n':'су били' + ' ' + rgpms['We-n'].value,
	};

	pluskvamperfekat2y = {
		'I-m':'бејах' + ' ' + rgpms['I-m'].value,
		'I-f':'бејах' + ' ' + rgpms['I-f'].value,
		'I-n':'бејах' + ' ' + rgpms['I-n'].value,
		'Thou-m':'бејаше' + ' ' + rgpms['I-m'].value,
		'Thou-f':'бејаше' + ' ' + rgpms['I-f'].value,
		'Thou-n':'бејаше' + ' ' + rgpms['I-n'].value,
		'HeSheIt-m':'бејаше' + ' ' + rgpms['I-m'].value,
		'HeSheIt-f':'бејаше' + ' ' + rgpms['I-f'].value,
		'HeSheIt-n':'бејаше' + ' ' + rgpms['I-n'].value,

		'We-m':'бејасмо' + ' ' + rgpms['We-m'].value,
		'We-f':'бејасмо' + ' ' + rgpms['We-f'].value,
		'We-n':'бејасмо' + ' ' + rgpms['We-n'].value,
		'You-m':'бејасте' + ' ' + rgpms['We-m'].value,
		'You-f':'бејасте' + ' ' + rgpms['We-f'].value,
		'You-n':'бејасте' + ' ' + rgpms['We-n'].value,
		'They-m':'бејаху' + ' ' + rgpms['We-m'].value,
		'They-f':'бејаху' + ' ' + rgpms['We-f'].value,
		'They-n':'бејаху' + ' ' + rgpms['We-n'].value,
	};

	pluskvamperfekat3y = {
		'I-m':'бех' + ' ' + rgpms['I-m'].value,
		'I-f':'бех' + ' ' + rgpms['I-f'].value,
		'I-n':'бех' + ' ' + rgpms['I-n'].value,
		'Thou-m':'беше' + ' ' + rgpms['I-m'].value,
		'Thou-f':'беше' + ' ' + rgpms['I-f'].value,
		'Thou-n':'беше' + ' ' + rgpms['I-n'].value,
		'HeSheIt-m':'беше' + ' ' + rgpms['I-m'].value,
		'HeSheIt-f':'беше' + ' ' + rgpms['I-f'].value,
		'HeSheIt-n':'беше' + ' ' + rgpms['I-n'].value,

		'We-m':'бесмо' + ' ' + rgpms['We-m'].value,
		'We-f':'бесмо' + ' ' + rgpms['We-f'].value,
		'We-n':'бесмо' + ' ' + rgpms['We-n'].value,
		'You-m':'бесте' + ' ' + rgpms['We-m'].value,
		'You-f':'бесте' + ' ' + rgpms['We-f'].value,
		'You-n':'бесте' + ' ' + rgpms['We-n'].value,
		'They-m':'беху' + ' ' + rgpms['We-m'].value,
		'They-f':'беху' + ' ' + rgpms['We-f'].value,
		'They-n':'беху' + ' ' + rgpms['We-n'].value,
	};

	potencijaly = {
		'I-m':'бих' + ' ' + rgpms['I-m'].value,
		'I-f':'бих' + ' ' + rgpms['I-f'].value,
		'I-n':'бих' + ' ' + rgpms['I-n'].value,
		'Thou-m':'би' + ' ' + rgpms['I-m'].value,
		'Thou-f':'би' + ' ' + rgpms['I-f'].value,
		'Thou-n':'би' + ' ' + rgpms['I-n'].value,
		'HeSheIt-m':'би' + ' ' + rgpms['I-m'].value,
		'HeSheIt-f':'би' + ' ' + rgpms['I-f'].value,
		'HeSheIt-n':'би' + ' ' + rgpms['I-n'].value,

		'We-m':'бисмо' + ' ' + rgpms['We-m'].value,
		'We-f':'бисмо' + ' ' + rgpms['We-f'].value,
		'We-n':'бисмо' + ' ' + rgpms['We-n'].value,
		'You-m':'бисте' + ' ' + rgpms['We-m'].value,
		'You-f':'бисте' + ' ' + rgpms['We-f'].value,
		'You-n':'бисте' + ' ' + rgpms['We-n'].value,
		'They-m':'би' + ' ' + rgpms['We-m'].value,
		'They-f':'би' + ' ' + rgpms['We-f'].value,
		'They-n':'би' + ' ' + rgpms['We-n'].value,
	};

	potencijalprosliy = {
		'I-m':'био бих' + ' ' + rgpms['I-m'].value,
		'I-f':'био бих' + ' ' + rgpms['I-f'].value,
		'I-n':'био бих' + ' ' + rgpms['I-n'].value,
		'Thou-m':'био би' + ' ' + rgpms['I-m'].value,
		'Thou-f':'био би' + ' ' + rgpms['I-f'].value,
		'Thou-n':'био би' + ' ' + rgpms['I-n'].value,
		'HeSheIt-m':'био би' + ' ' + rgpms['I-m'].value,
		'HeSheIt-f':'био би' + ' ' + rgpms['I-f'].value,
		'HeSheIt-n':'био би' + ' ' + rgpms['I-n'].value,

		'We-m':'били бисмо' + ' ' + rgpms['We-m'].value,
		'We-f':'били бисмо' + ' ' + rgpms['We-f'].value,
		'We-n':'били бисмо' + ' ' + rgpms['We-n'].value,
		'You-m':'били бисте' + ' ' + rgpms['We-m'].value,
		'You-f':'били бисте' + ' ' + rgpms['We-f'].value,
		'You-n':'били бисте' + ' ' + rgpms['We-n'].value,
		'They-m':'били би' + ' ' + rgpms['We-m'].value,
		'They-f':'били би' + ' ' + rgpms['We-f'].value,
		'They-n':'били би' + ' ' + rgpms['We-n'].value,
	};

	futur2y = {
		'I-m':'будем' + ' ' + rgpms['I-m'].value,
		'I-f':'будем' + ' ' + rgpms['I-f'].value,
		'I-n':'будем' + ' ' + rgpms['I-n'].value,
		'Thou-m':'будеш' + ' ' + rgpms['I-m'].value,
		'Thou-f':'будеш' + ' ' + rgpms['I-f'].value,
		'Thou-n':'будеш' + ' ' + rgpms['I-n'].value,
		'HeSheIt-m':'буде' + ' ' + rgpms['I-m'].value,
		'HeSheIt-f':'буде' + ' ' + rgpms['I-f'].value,
		'HeSheIt-n':'буде' + ' ' + rgpms['I-n'].value,

		'We-m':'будемо' + ' ' + rgpms['We-m'].value,
		'We-f':'будемо' + ' ' + rgpms['We-f'].value,
		'We-n':'будемо' + ' ' + rgpms['We-n'].value,
		'You-m':'будете' + ' ' + rgpms['We-m'].value,
		'You-f':'будете' + ' ' + rgpms['We-f'].value,
		'You-n':'будете' + ' ' + rgpms['We-n'].value,
		'They-m':'буду' + ' ' + rgpms['We-m'].value,
		'They-f':'буду' + ' ' + rgpms['We-f'].value,
		'They-n':'буду' + ' ' + rgpms['We-n'].value,
	};

	for (var key in perfekaty) {
		perfekat[key].value = perfekaty[key];
		pluskvamperfekat1[key].value = pluskvamperfekat1y[key];
		pluskvamperfekat2[key].value = pluskvamperfekat2y[key];
		pluskvamperfekat3[key].value = pluskvamperfekat3y[key];
		potencijal[key].value = potencijaly[key];
		potencijalprosli[key].value = potencijalprosliy[key];
		futur2[key].value = futur2y[key];
	}

	futur11();
	futur12();
	futur222();
}

function aorist1() {
	osnova = document.getElementById('verbsr-conjunction-aorist-i').value
	document.getElementById('verbsr-conjunction-aorist-i').value = osnova + 'х'
	document.getElementById('verbsr-conjunction-aorist-thou').value = osnova
	document.getElementById('verbsr-conjunction-aorist-hesheit').value = osnova
	document.getElementById('verbsr-conjunction-aorist-we').value = osnova + 'смо'
	document.getElementById('verbsr-conjunction-aorist-you').value = osnova + 'сте'
	document.getElementById('verbsr-conjunction-aorist-they').value = osnova + 'ше'
}

function aorist2() {
	osnova = document.getElementById('verbsr-conjunction-aorist-i').value
	document.getElementById('verbsr-conjunction-aorist-i').value = osnova + 'ох'
	document.getElementById('verbsr-conjunction-aorist-thou').value = osnova + 'е'
	document.getElementById('verbsr-conjunction-aorist-hesheit').value = osnova + 'e'
	document.getElementById('verbsr-conjunction-aorist-we').value = osnova + 'осмо'
	document.getElementById('verbsr-conjunction-aorist-you').value = osnova + 'осте'
	document.getElementById('verbsr-conjunction-aorist-they').value = osnova + 'оше'
}

function imperfekat1() {
	osnova = document.getElementById('verbsr-conjunction-imperfekat1-i').value
	document.getElementById('verbsr-conjunction-imperfekat1-i').value = osnova + 'ах'
	document.getElementById('verbsr-conjunction-imperfekat1-thou').value = osnova + 'аше'
	document.getElementById('verbsr-conjunction-imperfekat1-hesheit').value = osnova + 'аше'
	document.getElementById('verbsr-conjunction-imperfekat1-we').value = osnova + 'асмо'
	document.getElementById('verbsr-conjunction-imperfekat1-you').value = osnova + 'асте'
	document.getElementById('verbsr-conjunction-imperfekat1-they').value = osnova + 'аху'
}

function imperativ1() {
	osnova = document.getElementById('verbsr-conjunction-imperativ-i').value
	document.getElementById('verbsr-conjunction-imperativ-i').value = ''
	document.getElementById('verbsr-conjunction-imperativ-thou').value = osnova + 'и'
	document.getElementById('verbsr-conjunction-imperativ-hesheit').value = 'нека' + ' ' + osnova + 'и'
	document.getElementById('verbsr-conjunction-imperativ-we').value = osnova + 'имо'
	document.getElementById('verbsr-conjunction-imperativ-you').value = osnova + 'ите'
	document.getElementById('verbsr-conjunction-imperativ-they').value = 'нека' + ' ' + osnova + 'е'
}

function imperativ2() {
	osnova = document.getElementById('verbsr-conjunction-imperativ-i').value
	document.getElementById('verbsr-conjunction-imperativ-i').value = ''
	document.getElementById('verbsr-conjunction-imperativ-thou').value = osnova + 'ј'
	document.getElementById('verbsr-conjunction-imperativ-hesheit').value = 'нека' + ' ' + osnova
	document.getElementById('verbsr-conjunction-imperativ-we').value = osnova + 'јмо'
	document.getElementById('verbsr-conjunction-imperativ-you').value = osnova + 'јте'
	document.getElementById('verbsr-conjunction-imperativ-they').value = 'нека' + ' ' + osnova + 'ју'
}

function futur11() {
	document.getElementById('verbsr-conjunction-futur11-i').value = 'ћу да' + ' ' + document.getElementById('verbsr-conjunction-present-i').value
	document.getElementById('verbsr-conjunction-futur11-thou').value = 'ћеш да' + ' ' + document.getElementById('verbsr-conjunction-present-thou').value
	document.getElementById('verbsr-conjunction-futur11-hesheit').value = 'ће да' + ' ' + document.getElementById('verbsr-conjunction-present-hesheit').value
	document.getElementById('verbsr-conjunction-futur11-we').value = 'ћемо да' + ' ' + document.getElementById('verbsr-conjunction-present-we').value
	document.getElementById('verbsr-conjunction-futur11-you').value = 'ћете да' + ' ' + document.getElementById('verbsr-conjunction-present-you').value
	document.getElementById('verbsr-conjunction-futur11-they').value = 'ће да' + ' ' + document.getElementById('verbsr-conjunction-present-they').value
}

function futur12() {
	infinitive = document.getElementsByClassName('select2-selection__choice')[0].innerText.substr(1);
	document.getElementById('verbsr-conjunction-futur12-i').value = 'ћу' + ' ' + infinitive
	document.getElementById('verbsr-conjunction-futur12-thou').value = 'ћеш' + ' ' + infinitive
	document.getElementById('verbsr-conjunction-futur12-hesheit').value = 'ће' + ' ' + infinitive
	document.getElementById('verbsr-conjunction-futur12-we').value = 'ћемо' + ' ' + infinitive
	document.getElementById('verbsr-conjunction-futur12-you').value = 'ћете' + ' ' + infinitive
	document.getElementById('verbsr-conjunction-futur12-they').value = 'ће' + ' ' + infinitive
}

function futur131() {
	osnova = document.getElementById('verbsr-conjunction-futur13-i').value
	// infinitive = document.getElementsByClassName('select2-selection__choice')[0].innerText.substr(1);
	document.getElementById('verbsr-conjunction-futur13-i').value = osnova + 'ћу'
	document.getElementById('verbsr-conjunction-futur13-thou').value = osnova + 'ћеш'
	document.getElementById('verbsr-conjunction-futur13-hesheit').value = osnova + 'ће'
	document.getElementById('verbsr-conjunction-futur13-we').value = osnova + 'ћемо'
	document.getElementById('verbsr-conjunction-futur13-you').value = osnova + 'ћете'
	document.getElementById('verbsr-conjunction-futur13-they').value = osnova + 'ће'
}

function futur132() {
	osnova = document.getElementById('verbsr-conjunction-futur13-i').value
	// infinitive = document.getElementsByClassName('select2-selection__choice')[0].innerText.substr(1);
	document.getElementById('verbsr-conjunction-futur13-i').value = osnova + ' ' + 'ћу'
	document.getElementById('verbsr-conjunction-futur13-thou').value = osnova + ' '  + 'ћеш'
	document.getElementById('verbsr-conjunction-futur13-hesheit').value = osnova + ' '  + 'ће'
	document.getElementById('verbsr-conjunction-futur13-we').value = osnova + ' '  + 'ћемо'
	document.getElementById('verbsr-conjunction-futur13-you').value = osnova + ' '  + 'ћете'
	document.getElementById('verbsr-conjunction-futur13-they').value = osnova + ' '  + 'ће'
}

function futur222() {
	document.getElementById('verbsr-conjunction-futur2-i-m').value = 'будем' + ' ' + document.getElementById('verbsr-conjunction-rgp-i-m').value
	document.getElementById('verbsr-conjunction-futur2-i-f').value = 'будем' + ' ' + document.getElementById('verbsr-conjunction-rgp-i-f').value
	document.getElementById('verbsr-conjunction-futur2-i-n').value = 'будем' + ' ' + document.getElementById('verbsr-conjunction-rgp-i-n').value
	document.getElementById('verbsr-conjunction-futur2-thou-m').value = 'будеш' + ' ' + document.getElementById('verbsr-conjunction-rgp-i-m').value
	document.getElementById('verbsr-conjunction-futur2-thou-f').value = 'будеш' + ' ' + document.getElementById('verbsr-conjunction-rgp-i-f').value
	document.getElementById('verbsr-conjunction-futur2-thou-n').value = 'будеш' + ' ' + document.getElementById('verbsr-conjunction-rgp-i-n').value
	document.getElementById('verbsr-conjunction-futur2-hesheit-m').value = 'буде' + ' ' + document.getElementById('verbsr-conjunction-rgp-i-m').value
	document.getElementById('verbsr-conjunction-futur2-hesheit-f').value = 'буде' + ' ' + document.getElementById('verbsr-conjunction-rgp-i-f').value
	document.getElementById('verbsr-conjunction-futur2-hesheit-n').value = 'буде' + ' ' + document.getElementById('verbsr-conjunction-rgp-i-n').value

	document.getElementById('verbsr-conjunction-futur2-we-m').value = 'будемо' + ' ' + document.getElementById('verbsr-conjunction-rgp-we-m').value
	document.getElementById('verbsr-conjunction-futur2-we-f').value = 'будемо' + ' ' + document.getElementById('verbsr-conjunction-rgp-we-m').value
	document.getElementById('verbsr-conjunction-futur2-we-n').value = 'будемо' + ' ' + document.getElementById('verbsr-conjunction-rgp-we-m').value
	document.getElementById('verbsr-conjunction-futur2-you-m').value = 'будете' + ' ' + document.getElementById('verbsr-conjunction-rgp-we-m').value
	document.getElementById('verbsr-conjunction-futur2-you-f').value = 'будете' + ' ' + document.getElementById('verbsr-conjunction-rgp-we-f').value
	document.getElementById('verbsr-conjunction-futur2-you-n').value = 'будете' + ' ' + document.getElementById('verbsr-conjunction-rgp-we-n').value
	document.getElementById('verbsr-conjunction-futur2-they-m').value = 'буду' + ' ' + document.getElementById('verbsr-conjunction-rgp-we-m').value
	document.getElementById('verbsr-conjunction-futur2-they-f').value = 'буду' + ' ' + document.getElementById('verbsr-conjunction-rgp-we-f').value
	document.getElementById('verbsr-conjunction-futur2-they-n').value = 'буду' + ' ' + document.getElementById('verbsr-conjunction-rgp-we-n').value
}

function gpt() {
	osnova = document.getElementById('verbsr-conjunction-gpt-m-singular').value
	document.getElementById('verbsr-conjunction-gpt-m-singular').value = osnova + 'н'
	document.getElementById('verbsr-conjunction-gpt-f-singular').value = osnova + 'на'
	document.getElementById('verbsr-conjunction-gpt-n-singular').value = osnova + 'но'
	document.getElementById('verbsr-conjunction-gpt-m-plural').value = osnova + 'ни'
	document.getElementById('verbsr-conjunction-gpt-f-plural').value = osnova + 'не'
	document.getElementById('verbsr-conjunction-gpt-n-plural').value = osnova + 'на'
}

function rgpGen(a) {

	var osnova = document.getElementById('verbsr-conjunction-rgp-i-m').value;
	if (a == 1) {a = 'о'} else if (a == 2) {a = 'ао'}
	document.getElementById('verbsr-conjunction-rgp-i-m').value = osnova + a;
	document.getElementById('verbsr-conjunction-rgp-i-f').value = osnova + 'ла';
	document.getElementById('verbsr-conjunction-rgp-i-n').value = osnova + 'ло';
	document.getElementById('verbsr-conjunction-rgp-we-m').value = osnova + 'ли';
	document.getElementById('verbsr-conjunction-rgp-we-f').value = osnova + 'ле';
	document.getElementById('verbsr-conjunction-rgp-we-n').value = osnova + 'ла';
	document.getElementById('verbsr-conjunction-futur13-i').value = osnova;
}

function presentGen1() {
	var osnova = document.getElementById('verbsr-conjunction-present-i').value;
	document.getElementById('verbsr-conjunction-present-i').value = osnova + 'им';
	document.getElementById('verbsr-conjunction-present-thou').value = osnova + 'иш';
	document.getElementById('verbsr-conjunction-present-hesheit').value = osnova + 'и';
	document.getElementById('verbsr-conjunction-present-we').value = osnova + 'имо';
	document.getElementById('verbsr-conjunction-present-you').value = osnova + 'ите';
	document.getElementById('verbsr-conjunction-present-they').value = osnova + 'е';
}

function presentGen2() {
	var osnova = document.getElementById('verbsr-conjunction-present-i').value;
	document.getElementById('verbsr-conjunction-present-i').value = osnova + 'ем';
	document.getElementById('verbsr-conjunction-present-thou').value = osnova + 'еш';
	document.getElementById('verbsr-conjunction-present-hesheit').value = osnova + 'е';
	document.getElementById('verbsr-conjunction-present-we').value = osnova + 'емо';
	document.getElementById('verbsr-conjunction-present-you').value = osnova + 'ете';
	document.getElementById('verbsr-conjunction-present-they').value = osnova + 'у';
}

function presentGen3() {
	var osnova = document.getElementById('verbsr-conjunction-present-i').value;
	document.getElementById('verbsr-conjunction-present-i').value = osnova + 'ам';
	document.getElementById('verbsr-conjunction-present-thou').value = osnova + 'аш';
	document.getElementById('verbsr-conjunction-present-hesheit').value = osnova + 'а';
	document.getElementById('verbsr-conjunction-present-we').value = osnova + 'амо';
	document.getElementById('verbsr-conjunction-present-you').value = osnova + 'ате';
	document.getElementById('verbsr-conjunction-present-they').value = osnova + 'ају';
}

function presentDel() {
	document.getElementById('verbsr-conjunction-present-i').value = '';
	document.getElementById('verbsr-conjunction-present-thou').value = '';
	document.getElementById('verbsr-conjunction-present-hesheit').value = '';
	document.getElementById('verbsr-conjunction-present-we').value = '';
	document.getElementById('verbsr-conjunction-present-you').value = '';
	document.getElementById('verbsr-conjunction-present-they').value = '';
}