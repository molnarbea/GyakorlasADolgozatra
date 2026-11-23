import type { ProductType } from "../types/ProductType";

interface ProductProps{
    product: ProductType;
}

export function Product({product}: ProductProps){
    return(
        <div className="productKartya">
            <h2>{product.title}</h2>
            <img src={product.picture} alt="kép" />
            <p>{product.description}</p>
            <p>{product.price} Ft</p>
            <button className="kosarbaGomb">Kosárba</button>
        </div>
    )
}