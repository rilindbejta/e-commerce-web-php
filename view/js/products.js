let products = [
    {
        name: 'AOC C27G2Z 27',
        image1: './images/images-web/monitor1.png',
        image2: './images/images-web/monitor2.jpg',
        brand: 'AOC',
        old_price: '1',
        curr_price: '2'
    },
    {
        name: 'Alienware 27 Gaming Monitor - AW2721D',
        image1: './images/images-web/monitor3.jpg',
        image2: './images/images-web/monitor4.jpg',
        old_price: '1',
        curr_price: '2'
    },
    {
        name: 'ZOTAC Gaming GeForce RTX 3060',
        image1: './images/images-web/gRTX1.jpg',
        image2: './images/images-web/gRTX2.png',
        old_price: '1',
        curr_price: '2'
    },
    {
        name: 'Acer Nitro 5 AN515-55-53E5 Gaming Laptop',
        image1: './images/images-web/laptop1.jpg',
        image2: './images/images-web/laptop2.jpg',
        old_price: '1',
        curr_price: '2'
    },
    {
        name: 'CYBERPOWERPC Gamer Supreme Liquid Cool Gaming PC',
        image1: './images/images-web/desktop1.png',
        image2: './images/images-web/desktop2.jpg',
        old_price: '1',
        curr_price: '2'
    },
    {
        name: 'HyperX Cloud Flight',
        image1: './images/images-web/hyperx1.png',
        image2: './images/images-web/hyperx2.jpg',
        old_price: '1',
        curr_price: '2'
    },
    {
        name: 'SteelSeries Apex 5 Hybrid Mechanical Gaming Keyboard',
        image1: './images/images-web/keyboard1.png',
        image2: './images/images-web/keyboard2.jpg',
        old_price: '1',
        curr_price: '2'
    },
]

let product_list = document.querySelector('#products')

renderProducts = (products) => {
    products.forEach(e => {
        let prod = `
            <div class="col-4 col-md-6 col-sm-12">
                <div class="product-card">
                    <div class="product-card-img">
                        <img src="${e.image1}" alt="">
                        <img src="${e.image2}" alt="">
                    </div>
                    <div class="product-card-info">
                        <div class="product-btn">
                            <a href="./product-detail.php" class="btn-flat btn-hover btn-shop-now">shop now</a>
                            <button class="btn-flat btn-hover btn-cart-add">
                                <i class='bx bxs-cart-add'></i>
                            </button>
                            <button class="btn-flat btn-hover btn-cart-add">
                                <i class='bx bxs-heart'></i>
                            </button>
                        </div>
                        <div class="product-card-name">
                            ${e.name}
                        </div>
                        <div class="product-card-price">
                            <span><del>${e.old_price}</del></span>
                            <span class="curr-price">${e.curr_price}</span>
                        </div>
                    </div>
                </div>
            </div>
        `
        product_list.insertAdjacentHTML("beforeend", prod)
    })
}

renderProducts(products)

let filter_col = document.querySelector('#filter-col')

document.querySelector('#filter-toggle').addEventListener('click', () => filter_col.classList.toggle('active'))

document.querySelector('#filter-close').addEventListener('click', () => filter_col.classList.toggle('active'))