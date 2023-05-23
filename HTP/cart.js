setInterval(() => {
    Qty()
    totalsum()
}, 500);


const Qty = () => {
    var xrtp = new XMLHttpRequest();


    xrtp.open("GET", "display_table.php", true);


    xrtp.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    xrtp.send();
    xrtp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("cart-table").innerHTML =
                xrtp.responseText;
        }
    };
};
const totalsum = () => {
    var xrtp = new XMLHttpRequest();


    xrtp.open("GET", "totalsum.php", true);


    xrtp.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    xrtp.send();
    xrtp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("total").innerHTML =
                xrtp.responseText;
        }
    };
};
const update_qty = (cartid, productid) => {
    var xhr = new XMLHttpRequest();

    let qty = document.getElementById("Quantity-" + productid).value;

    xhr.open(
        "GET",
        "update_qty.php?qty=" + qty + "&cartid=" + cartid + "&productid=" + productid,
        true
    );
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data)
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send();
};

