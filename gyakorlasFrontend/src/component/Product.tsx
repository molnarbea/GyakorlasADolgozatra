import type { ProductType } from "../types/productType";

interface ProductsProps{
    product: ProductType;
}

export function Product({product}: ProductsProps){
    return(
        <div>
            <h2>{product.title}</h2>
            <p>{product.picture}</p>
            <p>{product.description}</p>
            <p>{product.price}</p>
        </div>
    )
}