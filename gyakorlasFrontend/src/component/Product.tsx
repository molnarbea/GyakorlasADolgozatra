import type { ProductType } from "../types/ProductType";

interface ProductProps{
    product: ProductType;
}

export function Product({product}: ProductProps){
    return(
        <div>
            <h2>{product.title}</h2>
            <p>{product.picture}</p>
            <p>{product.description}</p>
            <p>{product.price}</p>
        </div>
    )
}