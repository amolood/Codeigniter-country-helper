<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if ( ! function_exists('Code2Country'))
{
/**
 * Created by PhpStorm.
 * User: Amolood
 * Email : molood@amolood.com
 * Date: 5/9/2017
 * Time: 2:23 AM
 */

    function Code2Country($code)
    {
        if ($code == 'AW') return 'آروبا';
        if ($code == 'AZ') return 'أذربيجان';
        if ($code == 'AM') return 'أرمينيا';
        if ($code == 'ES') return 'أسبانيا';
        if ($code == 'AU') return 'أستراليا';
        if ($code == 'AF') return 'أفغانستان';
        if ($code == 'AL') return 'ألبانيا';
        if ($code == 'DE') return 'ألمانيا';
        if ($code == 'AG') return 'أنتيجوا وبربودا';
        if ($code == 'AO') return 'أنجولا';
        if ($code == 'AI') return 'أنجويلا';
        if ($code == 'AD') return 'أندورا';
        if ($code == 'UY') return 'أورجواي';
        if ($code == 'UZ') return 'أوزبكستان';
        if ($code == 'UG') return 'أوغندا';
        if ($code == 'UA') return 'أوكرانيا';
        if ($code == 'IE') return 'أيرلندا';
        if ($code == 'IS') return 'أيسلندا';
        if ($code == 'ET') return 'اثيوبيا';
        if ($code == 'ER') return 'اريتريا';
        if ($code == 'EE') return 'استونيا';
        if ($code == 'IL') return 'اسرائيل';
        if ($code == 'AR') return 'الأرجنتين';
        if ($code == 'JO') return 'الأردن';
        if ($code == 'EC') return 'الاكوادور';
        if ($code == 'AE') return 'الامارات العربية المتحدة';
        if ($code == 'BS') return 'الباهاما';
        if ($code == 'BH') return 'البحرين';
        if ($code == 'BR') return 'البرازيل';
        if ($code == 'PT') return 'البرتغال';
        if ($code == 'BA') return 'البوسنة والهرسك';
        if ($code == 'GA') return 'الجابون';
        if ($code == 'ME') return 'الجبل الأسود';
        if ($code == 'DZ') return 'الجزائر';
        if ($code == 'DK') return 'الدانمرك';
        if ($code == 'CV') return 'الرأس الأخضر';
        if ($code == 'SV') return 'السلفادور';
        if ($code == 'SN') return 'السنغال';
        if ($code == 'SD') return 'السودان';
        if ($code == 'SE') return 'السويد';
        if ($code == 'EH') return 'الصحراء الغربية';
        if ($code == 'SO') return 'الصومال';
        if ($code == 'CN') return 'الصين';
        if ($code == 'IQ') return 'العراق';
        if ($code == 'VA') return 'الفاتيكان';
        if ($code == 'PH') return 'الفيلبين';
        if ($code == 'AQ') return 'القطب الجنوبي';
        if ($code == 'CM') return 'الكاميرون';
        if ($code == 'CG') return 'الكونغو - برازافيل';
        if ($code == 'KW') return 'الكويت';
        if ($code == 'HU') return 'المجر';
        if ($code == 'IO') return 'المحيط الهندي البريطاني';
        if ($code == 'MA') return 'المغرب';
        if ($code == 'TF') return 'المقاطعات الجنوبية الفرنسية';
        if ($code == 'MX') return 'المكسيك';
        if ($code == 'SA') return 'المملكة العربية السعودية';
        if ($code == 'GB') return 'المملكة المتحدة';
        if ($code == 'NO') return 'النرويج';
        if ($code == 'AT') return 'النمسا';
        if ($code == 'NE') return 'النيجر';
        if ($code == 'IN') return 'الهند';
        if ($code == 'US') return 'الولايات المتحدة الأمريكية';
        if ($code == 'JP') return 'اليابان';
        if ($code == 'YE') return 'اليمن';
        if ($code == 'GR') return 'اليونان';
        if ($code == 'ID') return 'اندونيسيا';
        if ($code == 'IR') return 'ايران';
        if ($code == 'IT') return 'ايطاليا';
        if ($code == 'PG') return 'بابوا غينيا الجديدة';
        if ($code == 'PY') return 'باراجواي';
        if ($code == 'PK') return 'باكستان';
        if ($code == 'PW') return 'بالاو';
        if ($code == 'BW') return 'بتسوانا';
        if ($code == 'PN') return 'بتكايرن';
        if ($code == 'BB') return 'بربادوس';
        if ($code == 'BM') return 'برمودا';
        if ($code == 'BN') return 'بروناي';
        if ($code == 'BE') return 'بلجيكا';
        if ($code == 'BG') return 'بلغاريا';
        if ($code == 'BZ') return 'بليز';
        if ($code == 'BD') return 'بنجلاديش';
        if ($code == 'PA') return 'بنما';
        if ($code == 'BJ') return 'بنين';
        if ($code == 'BT') return 'بوتان';
        if ($code == 'PR') return 'بورتوريكو';
        if ($code == 'BF') return 'بوركينا فاسو';
        if ($code == 'BI') return 'بوروندي';
        if ($code == 'PL') return 'بولندا';
        if ($code == 'BO') return 'بوليفيا';
        if ($code == 'PF') return 'بولينيزيا الفرنسية';
        if ($code == 'PE') return 'بيرو';
        if ($code == 'TZ') return 'تانزانيا';
        if ($code == 'TH') return 'تايلند';
        if ($code == 'TW') return 'تايوان';
        if ($code == 'TM') return 'تركمانستان';
        if ($code == 'TR') return 'تركيا';
        if ($code == 'TT') return 'ترينيداد وتوباغو';
        if ($code == 'TD') return 'تشاد';
        if ($code == 'TG') return 'توجو';
        if ($code == 'TV') return 'توفالو';
        if ($code == 'TK') return 'توكيلو';
        if ($code == 'TO') return 'تونجا';
        if ($code == 'TN') return 'تونس';
        if ($code == 'TL') return 'تيمور الشرقية';
        if ($code == 'JM') return 'جامايكا';
        if ($code == 'GI') return 'جبل طارق';
        if ($code == 'GD') return 'جرينادا';
        if ($code == 'GL') return 'جرينلاند';
        if ($code == 'AX') return 'جزر أولان';
        if ($code == 'AN') return 'جزر الأنتيل الهولندية';
        if ($code == 'TC') return 'جزر الترك وجايكوس';
        if ($code == 'KM') return 'جزر القمر';
        if ($code == 'KY') return 'جزر الكايمن';
        if ($code == 'MH') return 'جزر المارشال';
        if ($code == 'MV') return 'جزر الملديف';
        if ($code == 'UM') return 'جزر الولايات المتحدة البعيدة الصغيرة';
        if ($code == 'SB') return 'جزر سليمان';
        if ($code == 'FO') return 'جزر فارو';
        if ($code == 'VI') return 'جزر فرجين الأمريكية';
        if ($code == 'VG') return 'جزر فرجين البريطانية';
        if ($code == 'FK') return 'جزر فوكلاند';
        if ($code == 'CK') return 'جزر كوك';
        if ($code == 'CC') return 'جزر كوكوس';
        if ($code == 'MP') return 'جزر ماريانا الشمالية';
        if ($code == 'WF') return 'جزر والس وفوتونا';
        if ($code == 'CX') return 'جزيرة الكريسماس';
        if ($code == 'BV') return 'جزيرة بوفيه';
        if ($code == 'IM') return 'جزيرة مان';
        if ($code == 'NF') return 'جزيرة نورفوك';
        if ($code == 'HM') return 'جزيرة هيرد وماكدونالد';
        if ($code == 'CF') return 'جمهورية افريقيا الوسطى';
        if ($code == 'CZ') return 'جمهورية التشيك';
        if ($code == 'DO') return 'جمهورية الدومينيك';
        if ($code == 'CD') return 'جمهورية الكونغو الديمقراطية';
        if ($code == 'ZA') return 'جمهورية جنوب افريقيا';
        if ($code == 'GT') return 'جواتيمالا';
        if ($code == 'GP') return 'جوادلوب';
        if ($code == 'GU') return 'جوام';
        if ($code == 'GE') return 'جورجيا';
        if ($code == 'GS') return 'جورجيا الجنوبية وجزر ساندويتش الجنوبية';
        if ($code == 'DJ') return 'جيبوتي';
        if ($code == 'JE') return 'جيرسي';
        if ($code == 'DM') return 'دومينيكا';
        if ($code == 'RW') return 'رواندا';
        if ($code == 'RU') return 'روسيا';
        if ($code == 'BY') return 'روسيا البيضاء';
        if ($code == 'RO') return 'رومانيا';
        if ($code == 'RE') return 'روينيون';
        if ($code == 'ZM') return 'زامبيا';
        if ($code == 'ZW') return 'زيمبابوي';
        if ($code == 'CI') return 'ساحل العاج';
        if ($code == 'WS') return 'ساموا';
        if ($code == 'AS') return 'ساموا الأمريكية';
        if ($code == 'SM') return 'سان مارينو';
        if ($code == 'PM') return 'سانت بيير وميكولون';
        if ($code == 'VC') return 'سانت فنسنت وغرنادين';
        if ($code == 'KN') return 'سانت كيتس ونيفيس';
        if ($code == 'LC') return 'سانت لوسيا';
        if ($code == 'MF') return 'سانت مارتين';
        if ($code == 'SH') return 'سانت هيلنا';
        if ($code == 'ST') return 'ساو تومي وبرينسيبي';
        if ($code == 'LK') return 'سريلانكا';
        if ($code == 'SJ') return 'سفالبارد وجان مايان';
        if ($code == 'SK') return 'سلوفاكيا';
        if ($code == 'SI') return 'سلوفينيا';
        if ($code == 'SG') return 'سنغافورة';
        if ($code == 'SZ') return 'سوازيلاند';
        if ($code == 'SY') return 'سوريا';
        if ($code == 'SR') return 'سورينام';
        if ($code == 'CH') return 'سويسرا';
        if ($code == 'SL') return 'سيراليون';
        if ($code == 'SC') return 'سيشل';
        if ($code == 'CL') return 'شيلي';
        if ($code == 'RS') return 'صربيا';
        if ($code == 'CS') return 'صربيا والجبل الأسود';
        if ($code == 'TJ') return 'طاجكستان';
        if ($code == 'OM') return 'عمان';
        if ($code == 'GM') return 'غامبيا';
        if ($code == 'GH') return 'غانا';
        if ($code == 'GF') return 'غويانا';
        if ($code == 'GY') return 'غيانا';
        if ($code == 'GN') return 'غينيا';
        if ($code == 'GQ') return 'غينيا الاستوائية';
        if ($code == 'GW') return 'غينيا بيساو';
        if ($code == 'VU') return 'فانواتو';
        if ($code == 'FR') return 'فرنسا';
        if ($code == 'PS') return 'فلسطين';
        if ($code == 'VE') return 'فنزويلا';
        if ($code == 'FI') return 'فنلندا';
        if ($code == 'VN') return 'فيتنام';
        if ($code == 'FJ') return 'فيجي';
        if ($code == 'CY') return 'قبرص';
        if ($code == 'KG') return 'قرغيزستان';
        if ($code == 'QA') return 'قطر';
        if ($code == 'KZ') return 'كازاخستان';
        if ($code == 'NC') return 'كاليدونيا الجديدة';
        if ($code == 'HR') return 'كرواتيا';
        if ($code == 'KH') return 'كمبوديا';
        if ($code == 'CA') return 'كندا';
        if ($code == 'CU') return 'كوبا';
        if ($code == 'KR') return 'كوريا الجنوبية';
        if ($code == 'KP') return 'كوريا الشمالية';
        if ($code == 'CR') return 'كوستاريكا';
        if ($code == 'CO') return 'كولومبيا';
        if ($code == 'KI') return 'كيريباتي';
        if ($code == 'KE') return 'كينيا';
        if ($code == 'LV') return 'لاتفيا';
        if ($code == 'LA') return 'لاوس';
        if ($code == 'LB') return 'لبنان';
        if ($code == 'LU') return 'لوكسمبورج';
        if ($code == 'LY') return 'ليبيا';
        if ($code == 'LR') return 'ليبيريا';
        if ($code == 'LT') return 'ليتوانيا';
        if ($code == 'LI') return 'ليختنشتاين';
        if ($code == 'LS') return 'ليسوتو';
        if ($code == 'MQ') return 'مارتينيك';
        if ($code == 'MO') return 'ماكاو الصينية';
        if ($code == 'MT') return 'مالطا';
        if ($code == 'ML') return 'مالي';
        if ($code == 'MY') return 'ماليزيا';
        if ($code == 'YT') return 'مايوت';
        if ($code == 'MG') return 'مدغشقر';
        if ($code == 'EG') return 'مصر';
        if ($code == 'MK') return 'مقدونيا';
        if ($code == 'MW') return 'ملاوي';
        if ($code == 'ZZ') return 'منطقة غير معرفة';
        if ($code == 'MN') return 'منغوليا';
        if ($code == 'MR') return 'موريتانيا';
        if ($code == 'MU') return 'موريشيوس';
        if ($code == 'MZ') return 'موزمبيق';
        if ($code == 'MD') return 'مولدافيا';
        if ($code == 'MC') return 'موناكو';
        if ($code == 'MS') return 'مونتسرات';
        if ($code == 'MM') return 'ميانمار';
        if ($code == 'FM') return 'ميكرونيزيا';
        if ($code == 'NA') return 'ناميبيا';
        if ($code == 'NR') return 'نورو';
        if ($code == 'NP') return 'نيبال';
        if ($code == 'NG') return 'نيجيريا';
        if ($code == 'NI') return 'نيكاراجوا';
        if ($code == 'NZ') return 'نيوزيلاندا';
        if ($code == 'NU') return 'نيوي';
        if ($code == 'HT') return 'هايتي';
        if ($code == 'HN') return 'هندوراس';
        if ($code == 'NL') return 'هولندا';
        if ($code == 'HK') return 'هونج كونج الصينية';
        else {
            return 'يوجد خطأ';
        }
    }}
