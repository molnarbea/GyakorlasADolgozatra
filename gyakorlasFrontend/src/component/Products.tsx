import { useProductContext } from "../contexts/ProductContext";
import { Product } from "./Product";

export function Products(){
    const {productList, load, error} = useProductContext();

    if(load){
        return <p>Product betöltése...</p>;
    }
    if (error) {
        return <p>{error}</p>;
    }

    return(
        <article>
            {productList.map((product) => {
                return <Product product = {product} key = {product.id}/>
            })}
        </article>
    )
}