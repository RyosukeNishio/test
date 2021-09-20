// カンマで分割し配列に格納
var resArray = TargetString.split(",");
// それぞれに番号を付加
var ret = "";
for( var i=0 ; i<resArray.length ; i++ ) {
   ret += '[' + (i+1) + '] ' + resArray[i] + "\n";
}
// 表示
alert(ret);







var test = commoditycodelist.split(",");
for (let i = 0; i < commoditycodelist.length; i++) {
    const element = commoditycodelist[i];
    console.log(commoditycodelist[i]);
}




let fruits = [commoditycodelist];
console.log(fruits);

var test = arr.join("-");


var arr = ["aaa", "b", "c", "d", "e"];
for (let i = 0; i < arr.length; i++) {
    const element = arr[i];
    console.log(arr[i]);
}
test = arr.split('-');
console.log(test);

if (commoditycodelist.indexOf('yml0002ym') !== -1) {
    let lineBanners = document.querySelector('.p-cart__line-friend p');
    lineBanners.remove()
}



if (commoditycodelist.indexOf('yml0002ym') !== -1) {
    lineBanners = document.querySelectorAll('.p-cart__line-friend');
    lineBanners.remove();
}


//　削除完成
if (commoditycodelist.indexOf('yml0002ym') !== -1) {
    lineBanners = document.querySelector('.p-cart__line-friend p');
    lineBanners.remove();
}





let intervalId = setInterval(() =>{
    if(commoditycodelist){
        console.log('********************1ing*********************' + commoditycodelist);
        let isDeleted = false;
        let lineBanners = document.querySelector('.p-cart__line-friend p');
        let lineBox = document.querySelector('.p-cart__line-friend');
        let items = ['807433', '807442','yml0002ym','807435','807436','808210','807443','807444'];
        let urls = ['https://lin.ee/BULeeIb','https://lin.ee/a5cvZfl','https://lin.ee/a5cvZfl','https://lin.ee/a5cvZfl','https://lin.ee/a5cvZfl','https://lin.ee/a5cvZfl','https://lin.ee/a5cvZfl','https://lin.ee/a5cvZfl'];
        let imgSrcs = ['/shop/cms/sp/order/complete/images/LINE_807433.png', '/shop/cms/sp/order/complete/images/LINE_807442.png','/shop/cms/sp/order/complete/images/LINE_807434.png','/shop/cms/sp/order/complete/images/LINE_807435.png', '/shop/cms/sp/order/complete/images/LINE_807436.png','/shop/cms/sp/order/complete/images/LINE_808210.png','/shop/cms/sp/order/complete/images/LINE_807443.png','/shop/cms/sp/order/complete/images/LINE_807444.png'];
        
        function deleteBanner() {
            while(lineBox.lastChild){
                lineBox.removeChild(lineBox.lastChild);
            }
            lineBox.remove();
            isDeleted = true;
            console.log('deleted');
        }
        function createBanner(url, imgSrc) {
            lineBox.insertAdjacentHTML('afterbegin', '<p style="overflow: visible;"><a href="' + url + '" target="_blank" style="overflow: visible;"><img src="' + imgSrc + '" style="overflow: visible;"></a></p>');
            console.log('created');
        }
        for (let i = 0; i < items.length; i++) {
            if(isDeleted == false ){
                if (commoditycodelist .indexOf(items[i])!== -1) {
                    deleteBanner();
                }
            }
        }
        for (let i = 0; i < items.length; i++) {
            if (commoditycodelist.indexOf(items[i]) !== -1) {
                createBanner(urls[i], imgSrcs[i]);
            }
        }
        clearInterval(intervalId);
    }
    }, 100);


while(lineBanners.lastChild){
  lineBanners.removeChild(lineBanners.lastChild);
}





let lineBanners = document.querySelector('.p-cart__line-friend');

while(lineBanners.lastChild){
  lineBanners.removeChild(lineBanners.lastChild);
}



// 追加完成
if (commoditycodelist.indexOf('yml0002ym') !== -1) {
    lineBox = document.querySelector('.p-cart__line-friend');
    lineBox.insertAdjacentHTML('afterbegin', '<p style="overflow: visible;"><a href="https://lin.ee/BULeeIb" target="_blank" style="overflow: visible;"><img src="/shop/cms/sp/order/complete/images/LINE_onlyminerals.jpg" style="overflow: visible;"></a></p><p style="overflow: visible;"><a href="https://lin.ee/a5cvZfl" target="_blank" style="overflow: visible;"><img src="/shop/cms/sp/order/complete/images/LINE_onlinestore.jpg" style="overflow: visible;"></a></p>');
}


//　削除して追加
if (commoditycodelist.indexOf('807435') !== -1) {
    lineBanners = document.querySelector('.p-cart__line-friend p');
    lineBanners.remove();
    lineBox = document.querySelector('.p-cart__line-friend');
    lineBox.insertAdjacentHTML('afterbegin', '<p style="overflow: visible;"><a href="https://lin.ee/a5cvZfl" target="_blank" style="overflow: visible;"><img src="/shop/cms/images/0000/catalog/om-14019/om-14019_t1.jpg" style="overflow: visible;"></a></p>');
}





let isDeleted = false;
let lineBanners = document.querySelector('.p-cart__line-friend p');
let lineBox = document.querySelector('.p-cart__line-friend');
let items = ['807433', '807442','807434','807435','807436','808210','807443','807444'];
let urls = ['https://lin.ee/BULeeIb','https://lin.ee/a5cvZfl','https://lin.ee/a5cvZfl','https://dogcat-clear.com/','https://lin.ee/a5cvZfl','https://lin.ee/a5cvZfl','https://lin.ee/a5cvZfl','https://lin.ee/a5cvZfl'];
let imgSrcs = ['/shop/cms/images/0000/catalog/om-13032/om-13032_t1.jpg', '/shop/cms/images/0000/catalog/om-14019/om-14019_t1.jpg','https://dogcat-clear.com/image/LINE807435.png', 'https://dogcat-clear.com/image/LINE807435.png', '/shop/cms/images/0000/catalog/om-14019/om-14019_t1.jpg', '/shop/cms/images/0000/catalog/om-14019/om-14019_t1.jpg', '/shop/cms/images/0000/catalog/om-14019/om-14019_t1.jpg', '/shop/cms/images/0000/catalog/om-14019/om-14019_t1.jpg'];

function deleteBanner() {
    lineBanners.remove();
    isDeleted = true;
}

function createBanner(url, imgSrc) {
    lineBox.insertAdjacentHTML('afterbegin', '<p style="overflow: visible;"><a href="' + url + '" target="_blank" style="overflow: visible;"><img src="' + imgSrc + '" style="overflow: visible;"></a></p>');
}

for (let i = 0; i < items.length; i++) {
    if(isDeleted == false ){
        if (commoditycodelist .indexOf(items[i])!== -1) {
            deleteBanner();
        }
    }
}
for (let i = 0; i < items.length; i++) {
    if (commoditycodelist.indexOf(items[i]) !== -1) {
        createBanner(urls[i], imgSrcs[i]);
    }
}



let isDeleted = false;
let lineBanners = document.querySelector('.p-cart__line-friend p');
let lineBox = document.querySelector('.p-cart__line-friend');
// let url = 'https://lin.ee/BULeeIb';
// let imgSrc = '/shop/cms/images/0000/catalog/om-13032/om-13032_t1.jpg';

function deleteBanner() {
    lineBanners.remove();
    isDeleted = true;
}

function createBanner(url, imgSrc) {
    lineBox.insertAdjacentHTML('afterbegin', '<p style="overflow: visible;"><a href="' + url + '" target="_blank" style="overflow: visible;"><img src="' + imgSrc + '" style="overflow: visible;"></a></p>');
}

// 該当商品が２点の場合　削除して追加
if(isDeleted == false ){
    if (commoditycodelist .indexOf('yml0016ym')!== -1) {
        deleteBanner();
    }
}

if(isDeleted == false ){
    if (commoditycodelist .indexOf('yml0003ym')!== -1) {
        deleteBanner();
    }
}

if (commoditycodelist.indexOf('yml0016ym') !== -1) {
    createBanner('https://lin.ee/BULeeIb', 'https://dogcat-clear.com/public_html/image/LINE1.png');
}
if (commoditycodelist.indexOf('yml0003ym') !== -1) {
    createBanne('https://lin.ee/a5cvZfl','/shop/cms/images/0000/catalog/om-14019/om-14019_t1.jpg' );
}

//   /shop/cms/images/0000/catalog/om-14019/om-14019_t1.jpg'



// if (commoditycodelist.indexOf('yml0016ym') !== -1) {
//     lineBanners = document.querySelector('.p-cart__line-friend p');
//     lineBanners.remove();
//     lineBox = document.querySelector('.p-cart__line-friend');
//     lineBox.insertAdjacentHTML('afterbegin', '<p style="overflow: visible;"><a href="https://lin.ee/BULeeIb" target="_blank" style="overflow: visible;"><img src="/shop/cms/images/0000/catalog/om-13032/om-13032_t1.jpg" style="overflow: visible;"></a></p>');
// }









if (commoditycodelist.indexOf('om120') !== -1) {
    lineBanners = document.querySelector('.p-cart__line-friend p');
    lineBanners.remove();
    lineBox = document.querySelector('.p-cart__line-friend');
    lineBox.insertAdjacentHTML('afterbegin', '<p style="overflow: visible;"><a href="https://lin.ee/a5cvZfl" target="_blank" style="overflow: visible;"><img src="/shop/cms/images/0000/catalog/om-14019/om-14019_t1.jpg" style="overflow: visible;"></a></p>');
}

if (commoditycodelist.indexOf('yml0016ym') !== -1) {
    lineBanners = document.querySelector('.p-cart__line-friend p');
    lineBanners.remove();
    lineBox = document.querySelector('.p-cart__line-friend');
    lineBox.insertAdjacentHTML('afterbegin', '<p style="overflow: visible;"><a href="https://lin.ee/BULeeIb" target="_blank" style="overflow: visible;"><img src="/shop/cms/images/0000/catalog/om-13032/om-13032_t1.jpg" style="overflow: visible;"></a></p>');
}


om120




if (commoditycodelist.indexOf('rrse1950') !== -1) {
    lineBanners = document.querySelector('.p-cart__line-friend img');
    lineBox = document.querySelector('.p-cart__line-friend');
    lineBox.insertAdjacentHTML('afterbegin', '<p style="overflow: visible;"><a href="https://lin.ee/BULeeIb" target="_blank" style="overflow: visible;"><img src="/shop/cms/sp/order/complete/images/LINE_onlyminerals.jpg" style="overflow: visible;"></a></p><p style="overflow: visible;"><a href="https://lin.ee/a5cvZfl" target="_blank" style="overflow: visible;"><img src="/shop/cms/sp/order/complete/images/LINE_onlinestore.jpg" style="overflow: visible;"></a></p>');
}


//   親要素.insertBefore(追加する要素, 親要素.firstChild)


//　成功
if (commoditycodelist.indexOf('rrse1950') !== -1) {
    sounyu = document.querySelector('.p-cart__line-friend');
    var aa = sounyu.innerHTML = '<p style="overflow: visible;"><a href="https://lin.ee/BULeeIb" target="_blank" style="overflow: visible;"><img src="/shop/cms/sp/order/complete/images/LINE_onlyminerals.jpg" style="overflow: visible;"></a></p><p style="overflow: visible;"><a href="https://lin.ee/a5cvZfl" target="_blank" style="overflow: visible;"><img src="/shop/cms/sp/order/complete/images/LINE_onlinestore.jpg" style="overflow: visible;"></a></p>';
}



element.insertBefore(new,ref)

※１番目には「追加したい要素」が入る、２番目に指定した「子要素」の１つ前に、新しく子要素として追加される。



 '<img src="/shop/cms/sp/order/complete/images/LINE_onlyminerals.jpg" style="overflow: visible;">';

kesu.remove();



  //    画像　LINE_onlyminerals.jpg　削除したい
  
  //　条件分岐　要素を指定　指定した要素の中にHTMLを挿入する

  
  if (commoditycodelist.indexOf('rrse1950') !== -1) {
    sounyu = document.querySelector('.p-cart__line-friend');
    sounyu.innerHTML = '<p>test</p><p style="overflow: visible;"><a href="https://lin.ee/BULeeIb" target="_blank" style="overflow: visible;"><img src="/shop/cms/sp/order/complete/images/LINE_onlyminerals.jpg" style="overflow: visible;"></a></p><p style="overflow: visible;"><a href="https://lin.ee/a5cvZfl" target="_blank" style="overflow: visible;"><img src="/shop/cms/sp/order/complete/images/LINE_onlinestore.jpg" style="overflow: visible;"></a></p>';
  }




  //　成功
if (commoditycodelist.indexOf('rrse1950') !== -1) {
    sounyu = document.querySelector('.p-cart__line-friend');
    sounyu.innerHTML = '<img src="/shop/cms/sp/order/complete/images/LINE_onlyminerals.jpg" style="overflow: visible;"><img src="/shop/cms/sp/parts/pageFooterCopyrightOnly/images/footer_logo_jadma.png" style="overflow: visible;">';
}