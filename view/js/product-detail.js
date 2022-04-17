document.querySelectorAll('.product-img-item').forEach(e => {
    e.addEventListener('click', () => {
        let img = e.querySelector('img').getAttribute('src')
        document.querySelector('#product-img > img').setAttribute('src', img)
    })
})

document.querySelector('#view-all-description').addEventListener('click', () => {
    let content = document.querySelector('.product-detail-description-content')
    content.classList.toggle('active')
    document.querySelector('#view-all-description').innerHTML = content.classList.contains('active') ? 'view less' : 'view all'
})

let products = [
    {
        name: 'Acer Nitro 5 AN515-55-53E5 Gaming Laptop',
        image1: './images/images-web/laptop1.jpg',
        image2: './images/images-web/laptop2.jpg',
        image3: './images/images-web/laptop3.jpg',
        image4: './images/images-web/laptop4.jpg',
        image5: './images/images-web/laptop5.jpg',
        brand: 'Acer',
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
        name: 'Logitech G703 Lightspeed Wireless Gaming Mouse',
        image1: './images/images-web/mouse1.png',
        image2: './images/images-web/mouse2.jpg',
        old_price: '1',
        curr_price: '2'
    },
    {
        name: 'JBL HorizoAlienware 27 Gaming Monitor - AW2721Dn',
        image1: './images/images-web/monitor1.png',
        image2: './images/images-web/monitor2.jpg',
        old_price: '1',
        curr_price: '2'
    },
    {
        name: 'JBL Tune 220TWSteelSeries Apex 5 Hybrid Mechanical Gaming KeyboardS',
        image1: './images/images-web/keyboard1.png',
        image2: './images/images-web/keyboard2.jpg',
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
]


let product_list = document.querySelector('#related-products')

renderProducts = (products) => {
    products.forEach(product => {
        let prod = ` 
            <div class="row product-row">
                <div class="col-5 col-md-12">
                    <div class="product-img" id="product-img">
                        <img src="${product.image1}" alt="">
                    </div>
                    <div class="box">
                        <div class="product-img-list">
                            <div class="product-img-item">
                                <img src="${product.image2}" alt="">
                            </div>
                            <div class="product-img-item">
                                <img src="${product.image4}" alt="">
                            </div>
                            <div class="product-img-item">
                                <img src="${product.image3}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7 col-md-12">
                    <div class="product-info">
                        <h1>
                            ${product.name}
                        </h1>
                        <div class="product-info-detail">
                            <span class="product-info-detail-title">Brand:</span>
                            <a href="#">${product.brand}</a>
                        </div>
                        <div class="product-info-detail">
                            <span class="product-info-detail-title">Rated:</span>
                            <span class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </span>
                        </div>
                        <p class="product-description">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo libero alias officiis dolore doloremque eveniet culpa dignissimos, itaque, cum animi excepturi sed veritatis asperiores soluta, nisi atque quae illum. Ipsum.
                        </p>
                        <div class="product-info-price">${product.curr_price}</div>
                        <div class="product-quantity-wrapper">
                            <span class="product-quantity-btn">
                                <i class='bx bx-minus'></i>
                            </span>
                            <span class="product-quantity">${product.quantity}</span>
                            <span class="product-quantity-btn">
                                <i class='bx bx-plus'></i>
                            </span>
                        </div>
                        <div>
                            <button class="btn-flat btn-hover">add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    description
                </div>
                <div class="product-detail-description">
                    <button class="btn-flat btn-hover btn-view-description" id="view-all-description">
                        view all
                    </button>
                    <div class="product-detail-description-content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit laudantium obcaecati odit dolorem, doloremque accusamus esse neque ipsa dignissimos saepe quisquam tempore perferendis deserunt sapiente! Recusandae illum totam earum ratione.
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam incidunt maxime rerum reprehenderit voluptas asperiores ipsam quas consequuntur maiores, at odit obcaecati vero sunt! Reiciendis aperiam perferendis consequuntur odio quas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quaerat eum veniam doloremque nihil repudiandae odio ratione culpa libero tempora. Expedita, quo molestias. Minus illo quis dignissimos aliquid sapiente error!
                        </p>
                            <img src="${product.image5}" alt="">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis accusantium officia, quae fuga in exercitationem aliquam labore ex doloribus repellendus beatae facilis ipsam. Veritatis vero obcaecati iste atque aspernatur ducimus.
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat quam praesentium id sit amet magnam ad, dolorum, cumque iste optio itaque expedita eius similique, ab adipisci dicta. Quod, quibusdam quas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, in corrupti ipsam sint error possimus commodi incidunt suscipit sit voluptatum quibusdam enim eligendi animi deserunt recusandae earum natus voluptas blanditiis?
                        </p>
                            <img src="${product.image6}" alt="">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ullam quam fugit veniam ipsum recusandae incidunt, ex ratione, magnam labore ad tenetur officia! In, totam. Molestias sapiente deserunt animi porro?
                        </p>
                    </div>
                </div>
            </div>
        `
        product_list.insertAdjacentHTML("beforeend", prod)
    })
}

renderProducts(products)