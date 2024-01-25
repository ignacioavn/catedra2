import { ProductsService } from 'src/app/services/products.service';
import { Component, OnInit } from '@angular/core';
import { Product } from 'src/app/interfaces/product';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-products',
  templateUrl: './products.component.html',
  styleUrls: ['./products.component.css']
})
export class ProductsComponent implements OnInit {

  createForm: FormGroup;
  products: Product[] = [];

  constructor(private productService: ProductsService, private formBuilder: FormBuilder) {
    this.createForm = this.formBuilder.group({
      name: ['', [Validators.required]],
      description: ['', [Validators.required]],
      price: ['', [Validators.required, Validators.min(0)]],
      image: ['', [Validators.required, Validators.pattern(/^images\/\d+\.(png|jfif)$/)]],
    });
  }

  ngOnInit(): void {
    this.getProducts();
  }

  getProducts(): void {
    this.productService.getProducts().subscribe(
      response => {
        this.products = response.products;
      },
      error => {
        console.error('Error al obtener los productos.', error);
      }
    );
  }

  createProduct(): void {
    if (this.createForm.valid) {
      const newProduct = this.createForm.value;

      this.productService.createProduct(newProduct).subscribe(
        (response) => {
          this.getProducts();
          this.createForm.reset();
        },
        (error) => {
          console.error('Error al crear el producto.', error);
        }
      );
    }
  }

  deleteProduct(id: number) {
    this.productService.deleteProduct(id).subscribe(
      (response) => {
        this.getProducts();
      },
      (error) => {
        console.error('Error al eliminar producto.', error);
      }
    );
  }
}
