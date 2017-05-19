
دليل أسلوب كتابة الشفرة البرمجية

مجتمع لغة PHP هو مجتمع ضخم ومتنوع، يتألف من عدد لا يعد ولا يحصى من المكتبات، وأطر عمل، و مكونات وعناصر أخرى. من الشائع أن يختار المطورون عدة خيارات منها ودمجها في مشروع واحد. من المهم أن يتم تقييد الشفرة البرمجية للغة PHP (قدر الإمكان) بأسلوب برمجي معين لكي يَسْهُل على المطورين التعامل المشترك وفهم محتوى الشفرة البرمجية في مكتبات مشاريعهم.

قامت Framework Interop Group بتقديم وإجازة سلسلة من الأساليب المُوصَى بها. ليس كل هذه التوصيات هي توصيات تتعلق بأسلوب كتابة الشفرة البرمجية، ولكن تحديداً ما يتعلق منها بأسلوب الكتابة هم: PSR-0، PSR-1، PSR-2، PSR-4. هذه التوصيات هي عبارة عن مجموعة من القواعد التي تستعملها مشاريع وتطبيقات كبرى مثل Drupal، Zend، Symfony، Laravel، CakePHP، phpBB، AWS SDK، FuelPHP، Lithium.. وغيرها. يمكنك استخدام هذه الأساليب والتوصيات في مشروعك الخاص أو الإستمرار في استخدام أسلوبك الخاص في الكتابة.

من الأمثل أن تقوم بكتابة شفرة برمجية تتماشى مع مجموعة قواعد قياسية متعارف عليها. ويتم تطبيق هذه القواعد عن طريق دمج الأساليب سابقة الذِّكر PSR أو أساليب أخرى تم اعتمادها من قبل PEAR أو Zend. هذا يعني أنه يمكن لأي مطور آخر أن يقرأ ويفهم عملك نظراً لأن محتواه يخضع لطريقة كتابة معتمدة وتستخدمها كثير من التطبيقات والتطبيقات الفرعية الأخرى التي قد تستخدمها مع مشروعك.

    قراءة المزيد عن PSR-0
    قراءة المزيد عن PSR-1
    قراءة المزيد عن PSR-2
    قراءة المزيد عن PSR-4
    قراءة المزيد عن الاسلوب القياسي لـ PEAR
    قراءة المزيد عن أسلوب كتابة الشفرة البرمجية في Symfony

يمكنك استخدام أدوات فحص الشفرة البرمجية ومعرفة ما إذا كانت تخضع لأي من التوصيات مثل PHP_CodeSniffer، وهنالك إضافات يمكن تنصيبها على محرر النصوص مثل Sublime Text وتتميز بأنها تتفاعل معك في أثناء الكتابة مباشرة.

يمكنك إصلاح الشفرة البرمجية وإخضاعها لأحد الأساليب القياسية باستخدام أي من هذه الأدوات:

    الأول هو PHP Coding Standards Fixer وهو جيد جداً وتم تجربته ونتائجه ممتازة.
    والآخر هو PHP Code Beautifier and Fixer وهي أداة مدمجة مع PHP_CodeSniffer ويمكن استخدامها لتصحيح أسلوب الكتابة من وقت إلى آخر.

ويمكنك أيضاً تشغيل phpcs يدوياً من سطر الأوامر:

phpcs -sw --standard=PSR2 file.php

بعد التنفيذ سوف تظهر أخطاء ووصفٌ لكيفية إصلاحها. أيضاً يمكن الإستفادة من هذا الأمر عبر إضافته كـ git hook بحيث تتحقق من أن جميع الشفرة البرمجية تتبع الأسلوب القياسي وإصلاح الأخطاء حتى يكون بالإمكان إعتمادها في المستودع (Repository).

إذا كنت تمتلك PHP_CodeSniffer عندها يمكنك تصحيح أسلوب الشفرة البرمجية تلقائياً باستخدام PHP Code Beautifier and Fixer.

phpcbf -w --standard=PSR2 file.php

أو عن طريق خيار آخر وهو استخدام PHP Coding Standards Fixer. باستخدام هذا الأخير سيقوم بإظهار نوع الأخطاء قبل إصلاحها.

php-cs-fixer fix -v --level=psr2 file.php

اللغة الإنجليزية هي المفضلة لكل التسميات والرموز والعلامات وجميع بنية الشفرة البرمجية. يمكن كتابة الملاحظات بأي لغة يمكن قراءتها من قبل المطورين الحاليين أو المحتملين.
