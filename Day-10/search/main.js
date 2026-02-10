/* 
! search About All Events

? onclick	يتنفذ لما تدوس كليك واحد.
? ondblclick	يتنفذ لما تدوس Double Click.
? onmousedown	لما تدوس زر الماوس لتحت.
? onmouseup	لما تسيب زر الماوس.
? onmousemove	كل ما تحرك الماوس جوه العنصر.
? onmouseover	لما الماوس يدخل على العنصر.
? onmouseout	لما الماوس يخرج من العنصر.
? oncontextmenu	لما تفتح كليك يمين (Context Menu).
? onkeydown	لما تدوس زرار في الكيبورد.
? onkeypress	(قديم) لما تكتب حرف (مش للأزرار الخاصة).
? onkeyup	لما تسيب إيدك من على الزرار.
? onfocus	لما العنصر ياخد تركيز.
? onblur	لما العنصر يفقد التركيز.
? onchange	لما القيمة تتغير (مثلاً اختيار من select).
? oninput	لما المستخدم يكتب حاجة في input.
? oninvalid	لما قيمة input مش صح (زي required).
? onreset	لما الفورم يتعمله Reset.
? onsubmit	لما الفورم يتبعت.
? onload	لما الصفحة أو عنصر يخلص تحميل.
? onunload	لما الصفحة تتقفل أو تتغير.
? onbeforeunload	قبل ما الصفحة تتقفل (ممكن ترجع رسالة تأكيد).
? onresize	لما يتغير حجم نافذة المتصفح.
? onscroll	لما تعمل Scroll.
? onerror	لما يحصل Error في تحميل عنصر (صورة مثلًا).

*/

let box = document.getElementById("searchBox");
let btn = document.getElementById("searchBtn");
let result = document.getElementById("result");

box.onkeyup=()=>{
    result.textContent = `Typing : ${box.value}`;
};
box.onchange=()=>{
    result.textContent = `Final value after change: ${box.value}`;  
};
btn.onclick=()=>{
    result.textContent = `You searched for: ${box.value}`; 
};
