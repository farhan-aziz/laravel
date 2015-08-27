<?php

namespace App\Helpers;



//use App\Models\Categorie;
use App\Models\Category;

class ApplicationHelper {

    /**
     * @return mixed
     */
    public static function getCategories(){
        return Category::with('courses')->get();
    }

    public static function countries()
    {

        $countries = "United Kingdom;Australia;Canada;New Zealand;United States;Afghanistan;Albania;Algeria;Andorra;Angola;Antigua & Deps;Argentina;Armenia;Austria;Azerbaijan;Bahamas;Bahrain;Bangladesh;Barbados;Belarus;Belgium;Belize;Benin;Bhutan;Bolivia;Bosnia Herzegovina;Botswana;Brazil;Brunei;Bulgaria;Burkina;Burundi;Cambodia;Cameroon;Cape Verde;Central African Rep;Chad;Chile;China;Colombia;Comoros;Congo;Congo {Democratic Rep};Costa Rica;Croatia;Cuba;Cyprus;Czech Republic;Denmark;Djibouti;Dominica;Dominican Republic;East Timor;Ecuador;Egypt;El Salvador;Equatorial Guinea;Eritrea;Estonia;Ethiopia;Fiji;Finland;France;Gabon;Gambia;Georgia;Germany;Ghana;Greece;Grenada;Guatemala;Guinea;Guinea-Bissau;Guyana;Haiti;Honduras;Hungary;Iceland;India;Indonesia;Iran;Iraq;Ireland {Republic};Israel;Italy;Ivory Coast;Jamaica;Japan;Jordan;Kazakhstan;Kenya;Kiribati;Korea North;Korea South;Kosovo;Kuwait;Kyrgyzstan;Laos;Latvia;Lebanon;Lesotho;Liberia;Libya;Liechtenstein;Lithuania;Luxembourg;Macedonia;Madagascar;Malawi;Malaysia;Maldives;Mali;Malta;Marshall Islands;Mauritania;Mauritius;Mexico;Micronesia;Moldova;Monaco;Mongolia;Montenegro;Morocco;Mozambique;Myanmar, {Burma};Namibia;Nauru;Nepal;Netherlands;Nicaragua;Niger;Nigeria;Norway;Oman;Pakistan;Palau;Panama;Papua New Guinea;Paraguay;Peru;Philippines;Poland;Portugal;Qatar;Romania;Russian Federation;Rwanda;St Kitts & Nevis;St Lucia;Saint Vincent & the Grenadines;Samoa;San Marino;Sao Tome & Principe;Saudi Arabia;Senegal;Serbia;Seychelles;Sierra Leone;Singapore;Slovakia;Slovenia;Solomon Islands;Somalia;South Africa;Spain;Sri Lanka;Sudan;Suriname;Swaziland;Sweden;Switzerland;Syria;Taiwan;Tajikistan;Tanzania;Thailand;Togo;Tonga;Trinidad & Tobago;Tunisia;Turkey;Turkmenistan;Tuvalu;Uganda;Ukraine;United Arab Emirates;Uruguay;Uzbekistan;Vanuatu;Vatican City;Venezuela;Vietnam;Yemen;Zambia;Zimbabwe";
        $countries = explode(";", $countries);
        $countryList = array();

        foreach($countries as $c)
        {
            array_push($countryList, array("id"=>$c, "value"=>$c));
        }
    }

    public static function ukCounties(){
       return $ukCounties = array(
            'Bedfordshire' => 'Bedfordshire',
            'Berkshire' => 'Berkshire',
            'Buckinghamshire' => 'Buckinghamshire',
            'Cambridgeshire' => 'Cambridgeshire',
            'Cheshire' => 'Cheshire',
            'Cornwall' => 'Cornwall',
            'Cumberland' => 'Cumberland',
            'Derbyshire' => 'Derbyshire',
            'Devon' => 'Devon',
            'Dorset' => 'Dorset',
            'Durham' => 'Durham',
            'East Yorkshire' => 'East Yorkshire',
            'Essex' => 'Essex',
            'Gloucestershire' => 'Gloucestershire',
            'Hampshire' => 'Hampshire',
            'Herefordshire' => 'Herefordshire',
            'Hertfordshire' => 'Hertfordshire',
            'Huntingdonshire' => 'Huntingdonshire',
            'Kent' => 'Kent',
            'Lancashire' => 'Lancashire',
            'Leicestershire' => 'Leicestershire',
            'Lincolnshire' => 'Lincolnshire',
            'Middlesex' => 'Middlesex',
            'Norfolk' => 'Norfolk',
            'North Yorkshire' => 'North Yorkshire',
            'Northamptonshire' => 'Northamptonshire',
            'Northumberland' => 'Northumberland',
            'Nottinghamshire' => 'Nottinghamshire',
            'Oxfordshire' => 'Oxfordshire',
            'Rutland' => 'Rutland',
            'Shropshire' => 'Shropshire',
            'Somerset' => 'Somerset',
            'Staffordshire' => 'Staffordshire',
            'Suffolk' => 'Suffolk',
            'Surrey' => 'Surrey',
            'Sussex' => 'Sussex',
            'Warwickshire' => 'Warwickshire',
            'West Yorkshire' => 'West Yorkshire',
            'Westmorland' => 'Westmorland',
            'Wiltshire' => 'Wiltshire',
            'Worcestershire' => 'Worcestershire',
            'Aberdeenshire' => 'Aberdeenshire',
            'Angus/Forfarshire' => 'Angus/Forfarshire',
            'Argyllshire' => 'Argyllshire',
            'Ayrshire' => 'Ayrshire',
            'Banffshire' => 'Banffshire',
            'Berwickshire' => 'Berwickshire',
            'Buteshire' => 'Buteshire',
            'Cromartyshire' => 'Cromartyshire',
            'Caithness' => 'Caithness',
            'Clackmannanshire' => 'Clackmannanshire',
            'Dumfriesshire' => 'Dumfriesshire',
            'Dunbartonshire/Dumbartonshire' => 'Dunbartonshire/Dumbartonshire',
            'East Lothian/Haddingtonshire' => 'East Lothian/Haddingtonshire',
            'Fife' => 'Fife',
            'Inverness-shire' => 'Inverness-shire',
            'Kincardineshire' => 'Kincardineshire',
            'Kinross-shire' => 'Kinross-shire',
            'Kirkcudbrightshire' => 'Kirkcudbrightshire',
            'Lanarkshire' => 'Lanarkshire',
            'Midlothian/Edinburghshire' => 'Midlothian/Edinburghshire',
            'Morayshire' => 'Morayshire',
            'Nairnshire' => 'Nairnshire',
            'Orkney' => 'Orkney',
            'Peeblesshire' => 'Peeblesshire',
            'Perthshire' => 'Perthshire',
            'Renfrewshire' => 'Renfrewshire',
            'Ross-shire' => 'Ross-shire',
            'Roxburghshire' => 'Roxburghshire',
            'Selkirkshire' => 'Selkirkshire',
            'Shetland' => 'Shetland',
            'Stirlingshire' => 'Stirlingshire',
            'Sutherland' => 'Sutherland',
            'West Lothian/Linlithgowshire' => 'West Lothian/Linlithgowshire',
            'Wigtownshire' => 'Wigtownshire',
            'Anglesey/Sir Fon' => 'Anglesey/Sir Fon',
            'Brecknockshire/Sir Frycheiniog' => 'Brecknockshire/Sir Frycheiniog',
            'Caernarfonshire/Sir Gaernarfon' => 'Caernarfonshire/Sir Gaernarfon',
            'Carmarthenshire/Sir Gaerfyrddin' => 'Carmarthenshire/Sir Gaerfyrddin',
            'Cardiganshire/Ceredigion' => 'Cardiganshire/Ceredigion',
            'Denbighshire/Sir Ddinbych' => 'Denbighshire/Sir Ddinbych',
            'Flintshire/Sir Fflint' => 'Flintshire/Sir Fflint',
            'Glamorgan/Morgannwg' => 'Glamorgan/Morgannwg',
            'Merioneth/Meirionnydd' => 'Merioneth/Meirionnydd',
            'Monmouthshire/Sir Fynwy' => 'Monmouthshire/Sir Fynwy',
            'Montgomeryshire/Sir Drefaldwyn' => 'Montgomeryshire/Sir Drefaldwyn',
            'Pembrokeshire/Sir Benfro' => 'Pembrokeshire/Sir Benfro',
            'Radnorshire/Sir Faesyfed' => 'Radnorshire/Sir Faesyfed',
            'County Antrim' => 'County Antrim',
            'County Armagh' => 'County Armagh',
            'County Down' => 'County Down',
            'County Fermanagh' => 'County Fermanagh',
            'County Tyrone' => 'County Tyrone',
            'County Londonderry/Derry' => 'County Londonderry/Derry',
        );
    }

    /**
     *
     */
    public static function listCategories()
    {
        $categories = Category::all();
        $cat = [];
        foreach($categories as $categorie)
        {
            $cat[$categorie->id] = $categorie->title;
        }

        asort($cat);

        return $cat;
    }

}