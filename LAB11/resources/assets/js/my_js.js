
//creates a new local storage
if (JSON.parse(localStorage.getItem("shop") === null)) {
    var shop = {};
    localStorage.setItem("shop", JSON.stringify(shop));
    console.log(JSON.parse(localStorage.getItem('shop')).length);
    $('#shopping-cart span').text(Object.keys(JSON.parse(localStorage.getItem('shop'))).length)
}
else
{
    let dic = JSON.parse(localStorage.getItem('shop'))
    let temp = 0;
    Object.keys(dic).forEach(function(key) {
        temp += dic[key];
    });
    $('#shopping-cart span').text(temp);
}



$('.fas.fa-heart').click((event)=>
{
    // console.log(Cookies);
    // $.cookie("shop", "0", { expires: 7 });
    if($(event.target).css('color') == 'rgb(0, 0, 0)')
        $(event.target).css('color', 'red');
    else
        $(event.target).css('color', 'black');
});

$('.add-card').click((event)=>
{
    if($(event.target).attr('class') === 'add-card')
        shop_cart($(event.target).children('span'));
    else
        shop_cart($(event.target));
    //   console.log($(event.target).parent().parent().parent().children("#temporary_message"));
});

// $('.fas.fa-shopping-cart').click((event)=>
// {
//     console.log($(event.target).closest('.add-card') === )

// });

function shop_cart(event)
{
        let res = $(event).parent().parent().parent().parent().children('.pi-text').children('div').text();
        let dic = JSON.parse(localStorage.getItem('shop'))
        if(res in dic)
            dic[res] += 1;
        else
            dic[res] = 1;
        // console.log(dic)
        localStorage.setItem('shop', JSON.stringify(dic));
        let temp = 0;
        Object.keys(dic).forEach(function(key) {
            temp += dic[key];
        });
        $('#shopping-cart span').text(temp);
        $(event).parent().parent().parent().children("#temporary_message").show().delay(2000).fadeOut();
        // $(event).parent().parent().children("#temporary_message").show().delay(2000).fadeOut();
}

let dic = JSON.parse(localStorage.getItem('shop'))

var  myJsonString= JSON.stringify(dic);
$.ajax({
    url: "/checkout",
    type: "POST",
    dataType: "json",
    data: {
        'action': "exec_find",
        'data': myJsonString
    },
    success: function(result) {
        // continue program
    },
    error: function(log) {
        // handle error
    }
});

// function goBack() {
//   window.history.back();
// }


$('.fas.fa-shopping-cart').click(() =>
{
    let dic = localStorage.getItem('shop')

    // var value = btoa(dic);
    // alert(dic);

    setCookie('checkout', dic, 30);



    // $.ajax
    // ({
    //     url: 'http://all.deei.fct.ualg.pt/~a62181/LAB11/checkout',
    //     data: myJsonString,
    //     type: 'post',
    //     success: function(result)
    //     {
    //         $('.modal-box').text(result).fadeIn(700, function()
    //         {
    //             setTimeout(function()
    //             {
    //                 $('.modal-box').fadeOut();
    //             }, 2000);
    //         });
    //     }
    // });
});

function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

$('.delete_item').on('click', (event)=>
{
    // if($(event.target).attr('class') === 'add-card')
    let item;
    let price;
    if($(event.target).attr('class') == 'fas fa-trash')
    {
        item = $(event.target).parent().parent().parent().children('.name');
        price = $(event.target).parent().parent().parent().children('.price')
    }
    else
    {
        item = $(event.target).parent().parent().children('.name');
        price = $(event.target).parent().parent().children('.price');
    }

    // let count = $('#shopping-cart').children('span').text();
    // console.log(count);
    update_items(item.text(), price.text().slice(0,-1));
    $(item.parent()).remove();
})

function update_items(item, price)
{
    console.log(item);
    let dic = JSON.parse(localStorage.getItem('shop'))
    // $.each(dic, (event, index) =>
    // {
    //     console.log(event, index);
    // })
    // delete dic.item;
    let count = $('#shopping-cart').children('span').text();
    count = count - dic[item];
    $('#shopping-cart').children('span').text(count);
    let total = $('.total_price').children('.price').text().slice(0, -1);
    total = total - dic[item] * price;
    if(total == 0)
    {
        $('#checkout-table').remove();
        var html = [
            '<div class="text-center pt-5 mt-5">',
                '<h1 class="">  ALL THE PEPES ARE GONE :( </h1>',
            '</div>'
        ].join("\n");
        $("body").append(html);
    }
    // console.log(price);
    $('.total_price').children('.price').text(total+"€");
    delete dic[item];
    localStorage.setItem("shop", JSON.stringify(dic));
    setCookie('checkout', JSON.stringify(dic), 30);
    // location.reload();
}

$('#buy_dem_pepes').click(()=>
{
    localStorage.clear();
    delete_cookie('checkout');

});

function delete_cookie( name ) {
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
  }

    // console.log('hello');
    // // sessionStorage.SessionName = "checkout";
    // let dic = JSON.parse(localStorage.getItem('shop'))

    // sessionStorage.setItem('checkout', dic);
    // console.log(sessionStorage.getItem('checkout'));
// });
