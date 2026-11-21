import { createContext, useContext, useEffect, useState, type ReactNode } from "react";
import type { ProductType } from "../types/productType";
import { getProducts } from "../services/ProductService";

interface ProductContextType{
    productList: ProductType[];
    load: boolean;
    error: string | null;
}

const ProductContext = createContext<ProductContextType | undefined>(undefined);

export function ProductProvider({children}: {children: ReactNode}){
    const [productList, setProductList] = useState<ProductType[]>([]);
    const [load, setLoad] = useState<boolean>(true);
    const [error, setError] = useState<string | null>(null);
    useEffect(() => {
        getProducts().then((data) => {
            setProductList(data);
            setError(null);
        }).catch(() => {
            setError("Nem sikerült betölteni az adatokat!");
        }).finally(() => {
            setLoad(false);
        });
    }, []);

    return (
        <ProductContext.Provider value = {{productList, load, error}}>{children}</ProductContext.Provider>
    );
}

export function useUserContext(){
    const context = useContext(ProductContext);
    if(context == undefined){
        throw new Error("Csak a ProductProvider-en belül használható");
    }
    return context;
}