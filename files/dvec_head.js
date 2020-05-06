// Редирект на региональный сайт по событию (нажатие кнопки etc) ************************************
function RegionChange(region)
{
	Cookies.set('dvec_region2', region, { expires: 1000 });
	console.log( 'выбран регион '+region );
	window.location.href = "https://www.dvec.ru/"+region+"/private_clients/";
	return false;
}

// Редирект с внутренностей /private_clients/ на региональный сайт
// Если есть значение куки и она в списке дозволенных, обязательно переходим на региональный сайт
function dvec_cookie_redirect()
{
	var region = Cookies.get('dvec_region2');
	if (region=="amursbyt" || region=="amur-blag" || region=="eaosbyt" || region=="khabsbyt" || region=="dalsbyt" || region=="sakhalin" || region=="yakutiya" || region=="kamchatka") {
		var urlnew = "\/"+region+location.pathname;
		urlnew=urlnew.replace(/\/+/gi, '\/');
		window.location.href = urlnew;
		} else 
		{
			Cookies.remove('dvec_region2');
		}
}

function dvec_cookie_redirect_strictly() // для стартовой страницы, обязательный переход с нее вовнутрь при отсутствии куки
{
	var region = Cookies.get('dvec_region2');
	if (region=="amursbyt" || region=="amur-blag" || region=="eaosbyt" || region=="khabsbyt" || region=="dalsbyt" || region=="sakhalin" || region=="yakutiya" || region=="kamchatka") {
		var urlnew = "\/"+region+location.pathname;
		urlnew=urlnew.replace(/\/+/gi, '\/');
		window.location.href = urlnew;
		} else 
		{
			Cookies.remove('dvec_region2');
			RegionChange('dalsbyt');
		}
}