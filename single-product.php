<?php
/**
 * Single Product Template for Aron Tara Modern Theme
 * 
 * @package AronTaraModern
 */

get_header(); 

// Get product data from URL parameters
$product_id = get_query_var('product_id');
$category = get_query_var('category');

// Product data array
$products_data = [
    'mechanical' => [
        'bearing' => [
            'name' => 'بیرینگ‌های غلتکی صنعتی',
            'description' => 'تامین و تعمیر انواع بیرینگ‌های صنعتی با کیفیت بالا برای ماشین‌آلات سنگین و خط تولید',
            'full_description' => 'بیرینگ‌های غلتکی یکی از اجزای حیاتی در ماشین‌آلات صنعتی هستند که نقش کلیدی در کاهش اصطکاک و افزایش کارایی دارند. ما انواع مختلف بیرینگ‌ها را از معتبرترین برندهای دنیا تامین می‌کنیم.',
            'features' => [
                'مقاومت بالا در برابر بارهای سنگین',
                'عمر مفید طولانی',
                'مناسب برای محیط‌های صنعتی سخت',
                'دقت بالا در حرکت و چرخش',
                'قابلیت کار در دماهای مختلف'
            ],
            'applications' => [
                'صنایع فولاد و آهن',
                'معادن و کارخانه‌های استخراج',
                'خط تولید و کارخانجات',
                'ماشین‌آلات راه‌سازی',
                'تجهیزات پتروشیمی'
            ],
            'brands' => ['SKF', 'FAG', 'NSK', 'TIMKEN', 'NTN'],
            'specs' => [
                'قطر داخلی: 10mm تا 1000mm',
                'قطر خارجی: 30mm تا 1500mm',
                'ظرفیت بار: تا 500 تن',
                'سرعت کاری: تا 10000 دور در دقیقه',
                'دمای کاری: -40°C تا +200°C'
            ]
        ],
        'hydraulic-pump' => [
            'name' => 'پمپ‌های هیدرولیک صنعتی',
            'description' => 'پمپ‌های هیدرولیک قدرتمند برای سیستم‌های صنعتی با فشار بالا',
            'full_description' => 'پمپ‌های هیدرولیک قلب سیستم‌های قدرت هیدرولیک محسوب می‌شوند. این پمپ‌ها انرژی مکانیکی را به انرژی هیدرولیک تبدیل می‌کنند.',
            'features' => [
                'فشار کاری بالا تا 350 بار',
                'راندمان بالای انرژی',
                'عملکرد مداوم و پایدار',
                'کنترل دقیق فشار و جریان',
                'مقاومت در محیط‌های سخت'
            ],
            'applications' => [
                'سیستم‌های هیدرولیک صنعتی',
                'ماشین‌آلات راه‌سازی',
                'جرثقیل‌ها و بالابرها',
                'دستگاه‌های پرس و قالب‌گیری',
                'سیستم‌های کنترل حرکت'
            ],
            'brands' => ['Rexroth', 'Parker', 'Eaton', 'Danfoss', 'Vickers'],
            'specs' => [
                'جریان: 10 تا 1000 لیتر در دقیقه',
                'فشار: 50 تا 350 بار',
                'قدرت موتور: 5 تا 500 اسب بخار',
                'سرعت: 1000 تا 3000 دور در دقیقه',
                'دمای کاری: -20°C تا +80°C'
            ]
        ],
        'hydraulic-motor' => [
            'name' => 'موتورهای هیدرولیک صنعتی',
            'description' => 'موتورهای هیدرولیک با قدرت بالا و گشتاور قابل تنظیم',
            'full_description' => 'موتورهای هیدرولیک انرژی فشار سیال را به انرژی مکانیکی چرخشی تبدیل می‌کنند و برای کاربردهای سنگین طراحی شده‌اند.',
            'features' => [
                'گشتاور بالا در سرعت کم',
                'کنترل دقیق سرعت',
                'راندمان انرژی بهینه',
                'مقاوم در برابر شوک و ارتعاش',
                'عملکرد پایدار در شرایط سخت'
            ],
            'applications' => [
                'سیستم‌های حمل و نقل صنعتی',
                'چرخ‌دنده‌های سنگین',
                'وینچ‌ها و جرثقیل‌ها',
                'ماشین‌آلات کشاورزی',
                'تجهیزات حفاری'
            ],
            'brands' => ['Bosch Rexroth', 'Eaton', 'Parker', 'Kawasaki', 'Linde'],
            'specs' => [
                'جابجایی: 50 تا 2000 سی‌سی در دور',
                'فشار کاری: 250 تا 450 بار',
                'سرعت: 50 تا 4000 دور در دقیقه',
                'گشتاور: 100 تا 50000 نیوتن متر',
                'راندمان: 85% تا 95%'
            ]
        ],
        'industrial-fan' => [
            'name' => 'فن‌های صنعتی و تهویه',
            'description' => 'فن‌های قدرتمند برای تهویه و خنک‌کاری صنعتی',
            'full_description' => 'فن‌های صنعتی برای انتقال هوا، تهویه محیط‌های کاری و کنترل دما و رطوبت در صنایع مختلف طراحی شده‌اند.',
            'features' => [
                'جریان هوای قدرتمند',
                'مصرف انرژی بهینه',
                'عملکرد بی‌صدا',
                'مقاوم در برابر خوردگی',
                'نگهداری آسان'
            ],
            'applications' => [
                'تهویه کارخانه‌ها',
                'سیستم‌های خنک‌کاری',
                'برج‌های خنک‌کن',
                'فن‌های اگزوز',
                'تهویه مطبوع صنعتی'
            ],
            'brands' => ['Ebm-papst', 'Ziehl-Abegg', 'Rosenberg', 'Systemair', 'Soler&Palau'],
            'specs' => [
                'قطر: 200mm تا 2000mm',
                'دبی هوا: 500 تا 100000 متر مکعب بر ساعت',
                'فشار استاتیک: 100 تا 3000 پاسکال',
                'قدرت موتور: 0.5 تا 500 کیلووات',
                'مواد سازنده: آلومینیوم، فولاد ضد زنگ'
            ]
        ],
        'hydraulic-jack' => [
            'name' => 'جک‌های هیدرولیک صنعتی',
            'description' => 'جک‌های هیدرولیک با ظرفیت بار بالا برای بلند کردن تجهیزات سنگین',
            'full_description' => 'جک‌های هیدرولیک ابزارهای قدرتمندی هستند که از فشار سیال هیدرولیک برای تولید نیروی عظیم استفاده می‌کنند.',
            'features' => [
                'ظرفیت بار بسیار بالا',
                'کنترل دقیق موقعیت',
                'عملکرد ایمن و قابل اعتماد',
                'ساختار مقاوم و بادوام',
                'کاربری آسان'
            ],
            'applications' => [
                'بلند کردن تجهیزات سنگین',
                'کارهای تعمیرات صنعتی',
                'نصب و راه‌اندازی ماشین‌آلات',
                'کارگاه‌های خودرو',
                'پروژه‌های ساختمانی'
            ],
            'brands' => ['Enerpac', 'Simplex', 'Power Team', 'Hi-Force', 'Holmatro'],
            'specs' => [
                'ظرفیت: 5 تا 1000 تن',
                'فشار کاری: 700 بار',
                'ارتفاع بالابری: 50 تا 500 میلی‌متر',
                'وزن: 2 تا 150 کیلوگرم',
                'مواد: فولاد آلیاژی مقاوم'
            ]
        ],
        'coupling' => [
            'name' => 'کوپلینگ‌های هیدرولیک',
            'description' => 'کوپلینگ‌ها و اتصالات هیدرولیک برای اتصال ایمن خطوط',
            'full_description' => 'کوپلینگ‌های هیدرولیک برای اتصال سریع و ایمن شیلنگ‌ها و خطوط هیدرولیک طراحی شده‌اند.',
            'features' => [
                'اتصال سریع و آسان',
                'مقاوم در برابر فشار بالا',
                'آب‌بندی مناسب',
                'مقاومت در برابر خوردگی',
                'طراحی ارگونومیک'
            ],
            'applications' => [
                'خطوط هیدرولیک',
                'تجهیزات متحرک',
                'سیستم‌های تست فشار',
                'ماشین‌آلات کشاورزی',
                'تجهیزات نظامی'
            ],
            'brands' => ['Parker', 'Eaton', 'Gates', 'Weatherhead', 'Ryco'],
            'specs' => [
                'سایز: 1/4 اینچ تا 2 اینچ',
                'فشار کاری: تا 400 بار',
                'دمای کاری: -40°C تا +100°C',
                'مواد: فولاد ضد زنگ، برنج',
                'استاندارد: ISO 16028'
            ]
        ]
    ],
    'electrical' => [
        'electric-motor' => [
            'name' => 'الکتروموتورهای صنعتی',
            'description' => 'موتورهای الکتریکی سه‌فاز با کیفیت و راندمان بالا',
            'full_description' => 'الکتروموتورهای صنعتی از اجزای اصلی تجهیزات صنعتی هستند که انرژی الکتریکی را به انرژی مکانیکی تبدیل می‌کنند.',
            'features' => [
                'راندمان بالای انرژی',
                'عمر مفید طولانی',
                'کم صدا و با ارتعاش کم',
                'قابلیت کنترل سرعت',
                'مقاومت در محیط‌های صنعتی'
            ],
            'applications' => [
                'پمپ‌ها و کمپرسورها',
                'فن‌ها و دمنده‌ها',
                'نوار نقاله و کانوایر',
                'میکسرها و همزن‌ها',
                'ماشین‌آلات تولیدی'
            ],
            'brands' => ['Siemens', 'ABB', 'WEG', 'Toshiba', 'GE'],
            'specs' => [
                'قدرت: 0.5 تا 1000 کیلووات',
                'ولتاژ: 220V، 380V، 660V',
                'سرعت: 750 تا 3000 دور در دقیقه',
                'کلاس عایق: F، H',
                'درجه حفاظت: IP55، IP56'
            ]
        ],
        'contactor' => [
            'name' => 'کنتاکتورهای برقی صنعتی',
            'description' => 'کنتاکتورهای قدرت برای کنترل موتورها و تجهیزات برقی',
            'full_description' => 'کنتاکتورها کلیدهای برقی هستند که برای روشن و خاموش کردن تجهیزات برقی از راه دور استفاده می‌شوند.',
            'features' => [
                'کنترل از راه دور',
                'قابلیت اتصال و قطع جریان‌های بالا',
                'عمر کاری طولانی',
                'ایمنی بالا',
                'نصب آسان'
            ],
            'applications' => [
                'کنترل موتورهای الکتریکی',
                'سیستم‌های روشنایی',
                'تجهیزات گرمایشی',
                'سیستم‌های اتوماسیون',
                'پنل‌های برق صنعتی'
            ],
            'brands' => ['Schneider', 'Siemens', 'ABB', 'LS Electric', 'Mitsubishi'],
            'specs' => [
                'جریان نامی: 9A تا 1000A',
                'ولتاژ کنترل: 24V، 110V، 220V',
                'قدرت موتور: 4kW تا 710kW',
                'تعداد قطب: 3 یا 4 قطب',
                'استاندارد: IEC 60947-4-1'
            ]
        ],
        'electronic-board' => [
            'name' => 'بردهای الکترونیکی صنعتی',
            'description' => 'کارت‌های الکترونیکی و بردهای کنترل صنعتی',
            'full_description' => 'بردهای الکترونیکی مغز کنترلی تجهیزات اتوماسیون صنعتی هستند که وظایف پردازش و کنترل را بر عهده دارند.',
            'features' => [
                'پردازش سریع سیگنال‌ها',
                'مقاوم در برابر تداخلات',
                'قابلیت برنامه‌ریزی',
                'اتصالات متنوع',
                'تشخیص خطا'
            ],
            'applications' => [
                'سیستم‌های کنترل فرآیند',
                'اتوماسیون صنعتی',
                'کنترل موتور',
                'سیستم‌های ایمنی',
                'مانیتورینگ تجهیزات'
            ],
            'brands' => ['Siemens', 'Rockwell', 'Omron', 'Mitsubishi', 'Schneider'],
            'specs' => [
                'پردازنده: ARM Cortex، x86',
                'حافظه: 512MB تا 8GB',
                'ورودی/خروجی: دیجیتال، آنالوگ',
                'ارتباطات: Ethernet، RS485، CAN',
                'دمای کاری: -25°C تا +70°C'
            ]
        ],
        'vibrometer' => [
            'name' => 'ویبرومترهای صنعتی',
            'description' => 'دستگاه‌های اندازه‌گیری ارتعاش و تشخیص عیب تجهیزات',
            'full_description' => 'ویبرومترها برای اندازه‌گیری و تحلیل ارتعاشات تجهیزات دوار و تشخیص زودهنگام مشکلات مکانیکی طراحی شده‌اند.',
            'features' => [
                'اندازه‌گیری دقیق ارتعاش',
                'تحلیل فرکانسی',
                'ذخیره‌سازی داده',
                'تشخیص خودکار عیب',
                'رابط کاربری ساده'
            ],
            'applications' => [
                'نگهداری پیشگیرانه',
                'تعادل دینامیکی',
                'تشخیص عیب بیرینگ',
                'کنترل کیفیت',
                'تحلیل مودال'
            ],
            'brands' => ['Fluke', 'SKF', 'Bruel&Kjaer', 'Pruftechnik', 'RION'],
            'specs' => [
                'محدوده فرکانسی: 1Hz تا 20kHz',
                'دقت: ±2%',
                'واحدهای اندازه‌گیری: mm/s، g، μm',
                'حافظه: تا 10000 اندازه‌گیری',
                'باتری: 20 ساعت کار مداوم'
            ]
        ]
    ],
    'instruments' => [
        'thermometer' => [
            'name' => 'ترمومترهای صنعتی دیجیتال',
            'description' => 'دستگاه‌های اندازه‌گیری دما با دقت بالا برای کاربردهای صنعتی',
            'full_description' => 'ترمومترهای صنعتی ابزارهای دقیقی برای اندازه‌گیری و کنترل دما در فرآیندهای مختلف صنعتی هستند.',
            'features' => [
                'دقت بالا در اندازه‌گیری',
                'نمایشگر دیجیتال خوانا',
                'قابلیت ذخیره و ثبت داده',
                'مقاوم در برابر شرایط سخت',
                'کالیبراسیون ساده'
            ],
            'applications' => [
                'کنترل فرآیند تولید',
                'سیستم‌های تهویه مطبوع',
                'آزمایشگاه‌ها',
                'صنایع غذایی',
                'تجهیزات پزشکی'
            ],
            'brands' => ['Fluke', 'Omega', 'Testo', 'Yokogawa', 'Honeywell'],
            'specs' => [
                'محدوده اندازه‌گیری: -200°C تا +1800°C',
                'دقت: ±0.1°C',
                'زمان پاسخ: کمتر از 1 ثانیه',
                'نمایشگر: LCD رنگی',
                'ارتباطات: RS485، Ethernet'
            ]
        ]
    ],
    'laboratory' => [
        'spectrophotometer' => [
            'name' => 'اسپکتروفوتومتر UV-Vis',
            'description' => 'دستگاه طیف‌سنجی پیشرفته برای آنالیز مواد',
            'full_description' => 'اسپکتروفوتومتر UV-Vis یکی از مهم‌ترین ابزارهای آزمایشگاهی برای آنالیز کمی و کیفی مواد مختلف است.',
            'features' => [
                'دقت بالا در اندازه‌گیری',
                'محدوده طیفی گسترده',
                'نرم‌افزار قدرتمند',
                'کالیبراسیون خودکار',
                'قابلیت ذخیره‌سازی داده'
            ],
            'applications' => [
                'آنالیز کیفیت آب',
                'کنترل کیفیت مواد غذایی',
                'آزمایشگاه‌های دارویی',
                'تحقیقات زیست‌پزشکی',
                'صنایع شیمیایی'
            ],
            'brands' => ['Shimadzu', 'Agilent', 'Hach', 'Thermo Scientific', 'PerkinElmer'],
            'specs' => [
                'محدوده طول موج: 190-1100 nm',
                'دقت طول موج: ±0.3 nm',
                'دقت فوتومتریک: ±0.003 Abs',
                'سرعت اسکن: 4800 nm/min',
                'محدوده خطی: 0-3 Abs'
            ]
        ]
    ],
    'chemicals' => [
        'anionic-flocculant' => [
            'name' => 'فلوکولانت آنیونی پلی‌اکریل‌آمید',
            'description' => 'پلی‌الکترولیت برای تصفیه آب و پساب صنعتی',
            'full_description' => 'فلوکولانت آنیونی نوعی پلیمر آبدوست است که برای جداسازی ذرات معلق در آب و تسریع فرآیند رسوب‌گذاری استفاده می‌شود.',
            'features' => [
                'قدرت فلوکولاسیون بالا',
                'حلالیت سریع در آب',
                'پایداری در pH مختلف',
                'غیر سمی و زیست‌تخریب‌پذیر',
                'کاهش حجم لجن'
            ],
            'applications' => [
                'تصفیه‌خانه‌های آب',
                'تصفیه پساب صنعتی',
                'معادن و کارخانه‌های فرآوری',
                'صنایع غذایی',
                'تصفیه آب استخرهای شنا'
            ],
            'brands' => ['SNF', 'Kemira', 'BASF', 'Dow', 'Nalco'],
            'specs' => [
                'وزن مولکولی: 10-25 میلیون دالتون',
                'درجه آنیونی: 10-40%',
                'ویسکوزیته: 3-8 سانتی‌پویز',
                'pH: 6.5-8.5',
                'محلول‌پذیری: >95%'
            ]
        ],
        'cationic-flocculant' => [
            'name' => 'فلوکولانت کاتیونی پلی‌اکریل‌آمید',
            'description' => 'پلی‌الکترولیت مثبت الشحنه برای تصفیه پساب',
            'full_description' => 'فلوکولانت کاتیونی دارای بار الکتریکی مثبت است و برای تصفیه پساب‌های حاوی ذرات منفی بار مناسب است.',
            'features' => [
                'بار الکتریکی مثبت',
                'مؤثر بر ذرات منفی بار',
                'سرعت رسوب‌گذاری بالا',
                'کاهش آلودگی آب',
                'سازگار با محیط زیست'
            ],
            'applications' => [
                'تصفیه پساب شهری',
                'صنایع کاغذسازی',
                'پتروشیمی',
                'صنایع نساجی',
                'فرآوری مواد معدنی'
            ],
            'brands' => ['SNF', 'Kemira', 'BASF', 'Dow', 'Ashland'],
            'specs' => [
                'وزن مولکولی: 8-20 میلیون دالتون',
                'درجه کاتیونی: 10-50%',
                'ویسکوزیته: 2-6 سانتی‌پویز',
                'pH: 7-9',
                'چگالی: 0.8-1.2 گرم بر سی‌سی'
            ]
        ],
        'pax' => [
            'name' => 'پتانسیم امیل اگزانتات (PAX)',
            'description' => 'منعقد کننده آب و عامل فلوتاسیون در معادن',
            'full_description' => 'PAX یکی از مهم‌ترین مواد شیمیایی در فرآیند فلوتاسیون مس است که به عنوان کلکتور عمل می‌کند.',
            'features' => [
                'عملکرد بالا در فلوتاسیون',
                'انتخاب‌پذیری مناسب',
                'پایداری در محیط قلیایی',
                'قابلیت کنترل pH',
                'سازگاری با محیط زیست'
            ],
            'applications' => [
                'فلوتاسیون سولفیدهای مس',
                'استخراج طلا و نقره',
                'فرآوری سنگ‌های قیمتی',
                'تصفیه آب',
                'صنایع معدنی'
            ],
            'brands' => ['Cytec', 'Huntsman', 'Orica', 'Chevron Phillips', 'Nasaco'],
            'specs' => [
                'خلوص: >90%',
                'pH محلول 1%: 11-13',
                'نقطه ذوب: 298-302°C',
                'حلالیت در آب: محدود',
                'بسته‌بندی: کیسه 25 کیلویی'
            ]
        ],
        'mibc' => [
            'name' => 'متیل ایزوبوتیل کربونیل (MIBC)',
            'description' => 'کف‌کننده فرآیند فلوتاسیون معادن',
            'full_description' => 'MIBC یک کف‌کننده اولیه در فرآیند فلوتاسیون است که برای ایجاد کف پایدار و انتخابی استفاده می‌شود.',
            'features' => [
                'تولید کف پایدار',
                'انتخاب‌پذیری بالا',
                'مقاومت در شرایط سخت',
                'کنترل آسان کیفیت کف',
                'سازگاری با کلکتورها'
            ],
            'applications' => [
                'فلوتاسیون مس و مولیبدن',
                'استخراج روی و سرب',
                'فرآوری سنگ آهن',
                'تصفیه زغال سنگ',
                'بازیافت کانی‌ها'
            ],
            'brands' => ['Dow', 'Chevron Phillips', 'Shell', 'ExxonMobil', 'Huntsman'],
            'specs' => [
                'خلوص: >99%',
                'نقطه جوش: 115-117°C',
                'چگالی: 0.802 گرم/سی‌سی',
                'ویسکوزیته: 0.59 سانتی‌پویز',
                'فشار بخار: 16 میلی‌بار'
            ]
        ]
    ]
];

// Get current product data
$current_product = null;
if ($category && $product_id && isset($products_data[$category][$product_id])) {
    $current_product = $products_data[$category][$product_id];
}

// If product not found, redirect to home
if (!$current_product) {
    wp_redirect(home_url());
    exit;
}
?>

<div class="product-hero">
    <div class="product-hero-bg"></div>
    <div class="container">
        <div class="product-hero-content">
            <nav class="product-breadcrumb">
                <a href="<?php echo home_url(); ?>">خانه</a>
                <span>›</span>
                <a href="<?php echo home_url('/#products'); ?>">محصولات</a>
                <span>›</span>
                <span><?php echo $current_product['name']; ?></span>
            </nav>
            
            <h1 class="product-title"><?php echo $current_product['name']; ?></h1>
            <p class="product-subtitle"><?php echo $current_product['description']; ?></p>
        </div>
    </div>
</div>

<section class="product-details">
    <div class="container">
        <div class="product-content">
            <div class="product-main">
                <div class="product-description-card">
                    <h2>توضیحات کامل</h2>
                    <p><?php echo $current_product['full_description']; ?></p>
                </div>
                
                <?php if (!empty($current_product['features'])): ?>
                <div class="product-features-card">
                    <h3>ویژگی‌ها</h3>
                    <ul class="features-list">
                        <?php foreach ($current_product['features'] as $feature): ?>
                        <li><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($current_product['applications'])): ?>
                <div class="product-applications-card">
                    <h3>کاربردها</h3>
                    <ul class="applications-list">
                        <?php foreach ($current_product['applications'] as $application): ?>
                        <li><?php echo $application; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
            
            <div class="product-sidebar">
                <?php if (!empty($current_product['specs'])): ?>
                <div class="specs-card">
                    <h3>مشخصات فنی</h3>
                    <ul class="specs-list">
                        <?php foreach ($current_product['specs'] as $spec): ?>
                        <li><?php echo $spec; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($current_product['brands'])): ?>
                <div class="brands-card">
                    <h3>برندهای معتبر</h3>
                    <div class="brands-list">
                        <?php foreach ($current_product['brands'] as $brand): ?>
                        <span class="brand-tag"><?php echo $brand; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
                
                <div class="contact-card">
                    <h3>درخواست قیمت</h3>
                    <p>برای دریافت قیمت و مشاوره رایگان با ما تماس بگیرید.</p>
                    <div class="contact-actions">
                        <a href="tel:09106168590" class="contact-btn phone">
                            📞 تماس مستقیم
                        </a>
                        <a href="https://wa.me/989106168590" class="contact-btn whatsapp" target="_blank">
                            💬 واتساپ
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products -->
<section class="related-products">
    <div class="container">
        <h2 class="section-title">محصولات مرتبط</h2>
        <div class="related-grid">
            <?php 
            // Show other products from same category
            $related_count = 0;
            if (isset($products_data[$category])) {
                foreach ($products_data[$category] as $key => $product) {
                    if ($key !== $product_id && $related_count < 3) {
                        $related_count++;
            ?>
            <div class="related-card">
                <div class="related-image"></div>
                <div class="related-info">
                    <h4><?php echo $product['name']; ?></h4>
                    <p><?php echo $product['description']; ?></p>
                    <a href="<?php echo home_url('/product/' . $category . '/' . $key . '/'); ?>" class="view-btn">
                        مشاهده جزئیات
                    </a>
                </div>
            </div>
            <?php 
                    }
                }
            }
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<style>
/* Product Page Specific Styles */
.product-hero {
    height: 60vh;
    position: relative;
    display: flex;
    align-items: center;
    background: var(--gradient-hero);
    overflow: hidden;
}

.product-hero-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: var(--overlay-bg);
    z-index: 1;
}

.product-hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
}

.product-breadcrumb {
    margin-bottom: 2rem;
    font-size: 1rem;
    color: var(--text-muted);
}

.product-breadcrumb a {
    color: var(--primary-color);
    text-decoration: none;
    transition: color 0.3s ease;
}

.product-breadcrumb a:hover {
    color: var(--accent-color);
}

.product-breadcrumb span {
    margin: 0 0.5rem;
    opacity: 0.6;
}

.product-title {
    font-size: clamp(2rem, 4vw, 3.5rem);
    font-weight: 700;
    margin-bottom: 1rem;
    background: var(--gradient-secondary);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.product-subtitle {
    font-size: 1.3rem;
    color: var(--text-muted);
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

.product-details {
    padding: 5rem 0;
    background: var(--darker-bg);
}

.product-content {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 4rem;
    align-items: start;
}

.product-main > div,
.product-sidebar > div {
    background: var(--gradient-card);
    backdrop-filter: blur(20px);
    border: 1px solid var(--glass-border);
    border-radius: var(--radius-lg);
    padding: 2rem;
    margin-bottom: 2rem;
    transition: all 0.3s ease;
}

.product-main > div:hover,
.product-sidebar > div:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
    border-color: var(--primary-color);
}

.product-description-card h2 {
    font-size: 1.8rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1.5rem;
}

.product-features-card h3,
.product-applications-card h3,
.specs-card h3,
.brands-card h3,
.contact-card h3 {
    font-size: 1.4rem;
    font-weight: 600;
    color: var(--secondary-color);
    margin-bottom: 1.5rem;
}

.features-list,
.applications-list,
.specs-list {
    list-style: none;
    padding: 0;
}

.features-list li,
.applications-list li,
.specs-list li {
    padding: 0.8rem 0;
    color: var(--text-muted);
    position: relative;
    padding-right: 1.5rem;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.features-list li:last-child,
.applications-list li:last-child,
.specs-list li:last-child {
    border-bottom: none;
}

.features-list li::before {
    content: '✓';
    position: absolute;
    right: 0;
    color: var(--success-color);
    font-weight: bold;
}

.applications-list li::before {
    content: '→';
    position: absolute;
    right: 0;
    color: var(--tertiary-color);
    font-weight: bold;
}

.specs-list li::before {
    content: '●';
    position: absolute;
    right: 0;
    color: var(--primary-color);
    font-weight: bold;
}

.brands-list {
    display: flex;
    flex-wrap: wrap;
    gap: 0.8rem;
}

.brand-tag {
    background: var(--gradient-primary);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: var(--radius-md);
    font-size: 0.9rem;
    font-weight: 500;
}

.contact-card {
    background: var(--gradient-secondary) !important;
    color: white;
    text-align: center;
}

.contact-card h3 {
    color: white !important;
}

.contact-card p {
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 2rem;
}

.contact-actions {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.contact-btn {
    display: inline-block;
    background: rgba(255, 255, 255, 0.15);
    color: white;
    text-decoration: none;
    padding: 1rem;
    border-radius: var(--radius-md);
    font-weight: 500;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.contact-btn:hover {
    background: rgba(255, 255, 255, 0.25);
    transform: translateY(-2px);
}

.related-products {
    padding: 5rem 0;
    background: var(--dark-bg);
}

.related-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.related-card {
    background: var(--gradient-card);
    border-radius: var(--radius-lg);
    overflow: hidden;
    border: 1px solid var(--glass-border);
    transition: all 0.4s ease;
    backdrop-filter: blur(15px);
}

.related-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-md);
    border-color: var(--primary-color);
}

.related-image {
    height: 150px;
    background: var(--gradient-hero);
    position: relative;
}

.related-image::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(99, 102, 241, 0.3), rgba(139, 92, 246, 0.2));
}

.related-info {
    padding: 1.5rem;
}

.related-info h4 {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--text-light);
    margin-bottom: 0.8rem;
}

.related-info p {
    color: var(--text-muted);
    font-size: 0.95rem;
    line-height: 1.5;
    margin-bottom: 1.5rem;
}

.view-btn {
    background: var(--gradient-primary);
    color: white;
    text-decoration: none;
    padding: 0.8rem 1.5rem;
    border-radius: var(--radius-md);
    font-weight: 500;
    transition: all 0.3s ease;
    display: inline-block;
}

.view-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(99, 102, 241, 0.3);
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .product-hero {
        height: 50vh;
    }
    
    .product-content {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .product-main > div,
    .product-sidebar > div {
        padding: 1.5rem;
    }
    
    .contact-actions {
        gap: 0.8rem;
    }
    
    .related-grid {
        grid-template-columns: 1fr;
    }
}
</style>