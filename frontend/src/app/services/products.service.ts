import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Product } from '../interfaces/product';

@Injectable({
  providedIn: 'root'
})
export class ProductsService {

  private url = 'http://127.0.0.1:8000/api';

  constructor(private http: HttpClient) {}

  getProducts(): Observable<{ products: Product[] }> {
    return this.http.get<{ products: Product[] }>(`${this.url}/products/`);
  }

  createProduct(product: Product): Observable<Product> {
    return this.http.post<Product>(`${this.url}/products/`, product);
  }

  deleteProduct(id: number): Observable<void> {
    return this.http.delete<void>(`${this.url}/products/${id}/`);
  }
}
