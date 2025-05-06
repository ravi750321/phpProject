
function Calc(val) {
    let index = $(val).parent().parent().index();
    console.log(index);
    
    let qty = document.querySelectorAll(".qty")[index].value;
    let rate = document.querySelectorAll(".price")[index].value;

    let amount = qty * rate;
    document.querySelectorAll(".amount")[index].value = amount;
    TotalAmount();
}

// function TotalAmount() {
//     let subTotal = 0;
//     let totalAmount = 0;
//     let amounts = document.querySelectorAll(".amount");
//     for (let index = 0; index < amounts.length; index++) {
//         amt = document.querySelectorAll(".amount")[index].value;
//         subTotal = +(subTotal) + +(amt);
//     }
//     document.querySelector(".subtotal").value = subTotal;
//     totalAmount = +(subTotal);
//     document.querySelector(".total").value = totalAmount;
//     let adjustment = document.querySelector(".adjustment").value;
//     totalAmount = +(totalAmount) - +(adjustment);
//     document.querySelector(".total").value = totalAmount;

// }