<?php
// Heading
$_['heading_title']                = 'Playful Sparkle - Google Tag Manager';
$_['heading_getting_started']      = 'ابدأ';
$_['heading_setup']                = 'إعداد Google Tag Manager';
$_['heading_troubleshot']          = 'استكشاف الأخطاء الشائعة وإصلاحها';
$_['heading_faq']                  = 'الأسئلة الشائعة';
$_['heading_contact']              = 'الاتصال بالدعم';

// Text
$_['text_extension']                = 'الإضافات';
$_['text_edit']                     = 'تحرير Google Tag Manager';
$_['text_success']                  = 'تم التعديل بنجاح: لقد قمت بتعديل Google Tag Manager!';
$_['text_group_ad_settings']        = 'إعدادات الإعلانات';
$_['text_group_analytics_settings'] = 'إعدادات التحليلات';
$_['text_group_security_settings']  = 'إعدادات الأمان';
$_['text_group_advanced_settings']  = 'إعدادات متقدمة';
$_['text_getting_started']          = '<p><strong>نظرة عامة:</strong> يسمح لك إضافة Playful Sparkle - Google Tag Manager لـ OpenCart 3.x بإدارة ونشر علامات التسويق بسهولة على متجر OpenCart الخاص بك دون الحاجة إلى أي مهارات في البرمجة. باستخدام هذه الإضافة، يمكنك تبسيط إعداد التتبع الخاص بك، مما يتيح تحليلات أفضل وكفاءة تسويقية.</p><p><strong>المتطلبات:</strong> تأكد من أن لديك حسابًا في Google Tag Manager، ومعرّف قياس صالح، وأنك تستخدم إصدارًا متوافقًا من OpenCart 3.x+، PHP 7.3.</p>';
$_['text_setup']                    = '<p><strong>إعداد Google Tag Manager:</strong> قم بتسجيل الدخول إلى <a href="https://tagmanager.google.com" target="_blank" rel="noopener noreferrer">حسابك في Google Tag Manager</a>، وأنشئ حاوية جديدة لموقعك على الويب إذا لم تكن قد فعلت ذلك بالفعل، واسترجع معرّف القياس الخاص بك. ثم أدخل هذا المعرّف في الحقل المخصص لإعدادات إضافة Playful Sparkle - Google Tag Manager في متجر OpenCart الخاص بك.</p>';
$_['text_troubleshot']              = '<ul><li><strong>تنسيق معرّف GTM غير صحيح</strong><br>تعني الرسالة "تنسيق معرّف GTM غير صحيح. يرجى التأكد من أنه يتبع التنسيق GTM-XXXXXXXX." أن معرّف حاوية GTM المُدخل لا يطابق النمط المطلوب.<br><strong>الحل:</strong> انتقل إلى حساب Google Tag Manager، وافتح الحاوية، وانسخ معرّف الحاوية الظاهر في العنوان، ثم الصقه في إعدادات الإضافة.<br><strong>تحقق:</strong> يجب أن يبدأ المعرّف بـ <strong>GTM-</strong> وأن يحتوي بعد الشرطة على أحرف كبيرة وأرقام فقط.</li>
<li><strong>الوسم &lt;noscript&gt;&lt;iframe&gt; غير موجود في واجهة المتجر</strong><br>إذا لم يكن مقطع &lt;noscript&gt;&lt;iframe&gt; موجوداً في مصدر الصفحة، فقد لا يكون التعديل مطبقاً، أو قد يفتقد قالب السمة إلى الوسم المطلوب.<br><strong>الحل:</strong><br>1) في لوحة الإدارة، انتقل إلى <strong>Extensions → Modifications</strong> ثم انقر <strong>Refresh</strong> لإعادة بناء ذاكرة التخزين المؤقت للتعديلات.<br>2) في لوحة الإدارة، انتقل إلى <strong>Extensions → Extensions</strong> واختر نوع الإضافة، ثم انقر <strong>Refresh</strong> لإعادة بناء ذاكرة التخزين المؤقت للإضافات.<br>3) تحقق من قالب السمة النشط وتأكد من أنه يحتوي على وسم <strong>&lt;body&gt;</strong> صالح. تعتمد إضافة GTM على وجوده.<br><strong>تحقق:</strong> افتح واجهة المتجر، واعرض مصدر الصفحة، وابحث عن <strong>googletagmanager.com/ns.html</strong> وتأكد من وجود كتلة &lt;noscript&gt;.</li>
<li><strong>لا يتم تتبع أي أحداث في GTM أو GA</strong><br>إذا تم تحميل المتجر ولكنك لا ترى أي زيارات أو محفزات أو أحداث في Google Tag Manager أو Google Analytics، فعادةً ما يكون التتبع محجوباً بسبب معرّف GTM غير صالح أو بسبب تهيئة غير صحيحة لوسم GA داخل حاوية GTM.<br><strong>الحل:</strong><ol><li>تأكد من أن معرّف GTM في الإضافة يطابق معرّف الحاوية لديك تماماً.</li><li>في Google Tag Manager، افتح الحاوية وتحقق من إعداد GA4.</li><li>تأكد من أن <strong>معرّف القياس</strong> (بالصيغة <strong>G-XXXXXXXXXX</strong>) صحيح ضمن إعدادات وسم GA4.</li><li>استخدم <strong>GTM Preview (Tag Assistant)</strong> للتأكد من إطلاق الوسوم عند عرض الصفحة وعند الأحداث.</li></ol><br><strong>تحقق:</strong> في GTM Preview يجب أن ترى وسم GA يعمل. وفي GA Realtime أو DebugView يجب أن ترى مستخدمين نشطين أو أحداث تصحيح.</li></ul>';
$_['text_faq']                      = '<details><summary>ماذا لو لم أرَ علاماتي تعمل في Google Tag Manager؟</summary>تأكد من أن معرّف القياس الخاص بك صحيح، وتحقق من نشر العلامات وتكوينها بشكل صحيح باستخدام المشغلات الصحيحة.</details><details><summary>كيف يمكنني التحقق من أن الإضافة تعمل؟</summary>استخدم إضافة <a href="https://tagassistant.google.com/" target="_blank" rel="noopener noreferrer">Google Tag Assistant</a> لمتصفح Chrome أو وضع المعاينة في Google Tag Manager للتأكد من أن علاماتك تعمل كما هو متوقع.</details><details><summary>هل هذه الإضافة متوافقة مع إضافات أخرى؟</summary>في حين أن هذه الإضافة متوافقة بشكل عام، فمن المستحسن اختبارها مع الإضافات الأخرى المثبتة على موقعك لتجنب التعارضات. إذا واجهت مشكلات، فتحقق من وجود مشكلات توافق معروفة.</details><details><summary>كيف يمكنني استكشاف مشكلات العلامات الشائعة وإصلاحها؟</summary>راجع دليل استكشاف الأخطاء وإصلاحها الخاص بـ Google Tag Manager للحصول على مساعدة بشأن مشكلات العلامات الشائعة وأفضل الممارسات للتكوين.</details>';
$_['text_contact']                  = '<p>للحصول على مزيد من المساعدة، يرجى التواصل مع فريق الدعم لدينا:</p><ul><li><strong>الاتصال:</strong> <a href="mailto:%s">%s</a></li><li><strong>الوثائق:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">وثائق المستخدم</a></li></ul>';
$_['text_gcm_info']                 = 'لاستخدام هذه الميزة، تأكد من تثبيت لافتة ملفات تعريف الارتباط. تحدد هذه الإضافة حالة موافقة أساسية افتراضيًا، لكن لافتة ملفات تعريف الارتباط مسؤولة عن تحديث الموافقة للسماح بجمع البيانات.';

// Tab
$_['tab_general']                   = 'عام';
$_['tab_gcm']                       = 'Google Conset Mode (GCM)';
$_['tab_help_and_support']          = 'المساعدة والدعم';

// Entry
$_['entry_status']                  = 'الحالة';
$_['entry_gtm_id']                  = 'معرّف القياس';
$_['entry_gcm_status']              = 'تفعيل Google Consent Mode';
$_['entry_ad_storage']              = 'تخزين الإعلانات';
$_['entry_ad_user_data']            = 'بيانات مستخدم الإعلانات';
$_['entry_ad_personalization']      = 'تخصيص الإعلانات';
$_['entry_analytics_storage']       = 'تخزين التحليلات';
$_['entry_functionality_storage']   = 'تخزين الوظائف';
$_['entry_personalization_storage'] = 'تخزين التخصيص';
$_['entry_security_storage']        = 'تخزين الأمان';
$_['entry_wait_for_update']         = 'انتظر التحديث';
$_['entry_ads_data_redaction']      = 'تنقيح بيانات الإعلانات';
$_['entry_url_passthrough']         = 'تمرير عنوان URL';
$_['entry_strict']                  = 'صارم';
$_['entry_balanced']                = 'متوازن';
$_['entry_custom']                  = 'مخصص';
$_['entry_gcm_profiles']            = 'ملفات تعريف Google Consent Mode';

// Help
$_['help_ad_storage']               = 'يتحكم فيما إذا كان مسموحًا بتخزين البيانات لأغراض متعلقة بالإعلانات، مثل تتبع نقرات الإعلانات أو الإحالات الناجحة.';
$_['help_ad_user_data']             = 'يحدد ما إذا كانت بيانات حول المستخدمين الذين يتفاعلون مع الإعلانات مخزنة، مما يعزز قدرات استهداف الإعلانات.';
$_['help_ad_personalization']       = 'يسمح بتخصيص الإعلانات بناءً على بيانات المستخدم، مما يوفر إعلانات أكثر ملاءمة للمستخدمين.';
$_['help_analytics_storage']        = 'يتيح تخزين البيانات المستخدمة لأغراض التحليلات، مما يساعد في تتبع أداء الموقع وسلوك المستخدم.';
$_['help_functionality_storage']    = 'يسمح بتخزين البيانات لدعم الوظائف، مثل تفضيلات المستخدم أو ميزات الموقع التي تعزز تجربة المستخدم.';
$_['help_personalization_storage']  = 'يتحكم في تخزين البيانات لتخصيص تجربة المستخدم، مثل المحتوى أو الإعدادات الموصى بها.';
$_['help_security_storage']         = 'يضمن تخزين البيانات المتعلقة بالأمان، مثل منع الاحتيال والتحكم الآمن في الوصول.';
$_['help_wait_for_update']          = 'يحدد الوقت (بالمللي ثانية) للتأخير قبل تحديث حالة الموافقة، مما يضمن تطبيق جميع الإعدادات.';
$_['help_ads_data_redaction']       = 'يقوم بتنقيح بيانات المستخدم المتعلقة بالإعلانات، مما يضمن الخصوصية عن طريق إخفاء بعض المعلومات التعريفية.';
$_['help_url_passthrough']          = 'يسمح لعنوان URL بالمرور عبر عمليات التحقق من الموافقة، وهو أمر مفيد لتتبع مسارات مستخدم محددة دون تخزين بيانات شخصية.';
$_['help_gcm_status']               = 'يقوم بتفعيل Google Consent Mode، مما يسمح لموقعك بتعديل سلوك علامات جوجل بناءً على إعدادات موافقة المستخدم. يوفر هذا الوضع تتبعًا صديقًا للخصوصية، مما يسمح للتحليلات والإعلانات بالعمل بما يتوافق مع تفضيلات الموافقة.';
$_['help_gtm_id_locate']            = 'للعثور على معرّف القياس الخاص بك، قم بتسجيل الدخول إلى <a href="https://tagmanager.google.com" target="_blank" rel="external noopener noreferrer">حسابك في Google Tag Manager</a>. في مساحة العمل، ابحث عن المعرّف في أعلى لوحة التحكم—يبدأ بـ "GTM-" متبوعًا بسلسلة فريدة من الحروف والأرقام، مثل "GTM-XXXXXXXX". <a href="https://support.google.com/analytics/answer/12270356?hl=en" target="_blank" rel="external noopener noreferrer">تعليمات أكثر تفصيلاً هنا</a>.';

// Error
$_['error_permission']              = 'تحذير: ليس لديك صلاحية تعديل إعدادات Google Tag Manager!';
$_['error_gtm_id']                  = 'حقل معرّف GTM مطلوب. يرجى إدخال معرّف القياس الخاص بك.';
$_['error_gtm_id_invalid']          = 'تنسيق معرّف GTM غير صحيح. تأكد من أنه يتبع التنسيق GTM-XXXXXXXX.';
$_['error_wait_for_update']         = 'يجب أن تكون قيمة "انتظر التحديث" رقمًا بين 0 و 10000 مللي ثانية.';
