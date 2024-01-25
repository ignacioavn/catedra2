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
  editForm: FormGroup;
  products: Product[] = [];
  editId: number = 0;

  constructor(private productService: ProductsService, private formBuilder: FormBuilder) {
    this.createForm = this.formBuilder.group({
      name: ['', [Validators.required]],
      description: ['', [Validators.required]],
      price: ['', [Validators.required, Validators.min(0)]],
      image: ['', [Validators.required, Validators.pattern(/^images\/\d+\.(jfif|jpg)$/)]],
    });

    this.editForm = this.formBuilder.group({
      name: ['', [Validators.required]],
      description: ['', [Validators.required]],
      price: ['', [Validators.required, Validators.min(0)]],
      image: ['', [Validators.required, Validators.pattern(/^images\/\d+\.(jfif|jpg)$/)]],
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

  editProduct(id: number): void {
    this.editId = id;
    this.productService.editProduct(id).subscribe(
      (response) => {
        const product = response.product;
        this.editForm.patchValue({
          name: product.name,
          description: product.description,
          price: product.price,
          image: product.image,
        });
      },
      (error) => {
        console.error(`Error al obtener los datos del producto con ID ${id}.`, error);
      }
    );
  }

  updateProduct(id: number): void {
    if (this.editForm.valid) {
      const editedProduct = this.editForm.value;

      this.productService.updateProduct(id, editedProduct).subscribe(
        (response) => {
          this.getProducts();
          this.editForm.reset();
        },
        (error) => {
          console.error('Error al actualizar el producto.', error);
        }
      );
    }
  }
}
