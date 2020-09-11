import { Component } from '@angular/core';
declare var  brain: any;
import { ServiciosService } from "./shared/servicios.service";

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  public network = new brain.NeuralNetwork();
  title = 'redneuronal';
  tamanoArreglo;//--
  arregloBinario2 = [];//--
  arg; //--
  parametro; //--
  arreglotemponral; //--

  array1 = {};
  array2 = {};
  objeto = [];
  ser = {};

  entrada = [];
  salida = [];
  configuraEntrada = [];
  configuraSalida = [];
  salidaEntrenamiento;
  pruebaentrada = {
    'audio':5,
    'video':0,
    'documento':20,
    'lengFront':2,
    'lengBack':2,
    'empleado':22
  };
  pruebaconfiguraEntrada = {
    'audio':8,
    'video':8,
    'documento':8,
    'lengFront':5,
    'lengBack':5,
    'empleado':9
  };
  prueba= {};

  constructor (public servicios: ServiciosService) {}

  ngOnInit(){
    this.servicios.getEntrada().subscribe(data => {
      this.entrada = data;
      console.log(this.entrada);
    });
      
    this.servicios.getSalida().subscribe(data => {
      this.salida = data;
      console.log(data);
    });

    this.servicios.getconfiguraEntrada().subscribe(data => {
      this.configuraEntrada = data;
      console.log(data);
    });

    this.servicios.getconfiguraSalida().subscribe(data => {
      this.configuraSalida = data;
      console.log(data);
    });
  }

  binSal(params1 , params2 ){
    for (var key in params1) {
      params1[key] =params1[key].toString(2);
      if(params1[key].length < params2[key]){
        this.parametro =params1[key];
        this.arreglotemponral = Array.from(this.parametro);
        for (let index = params1[key].length; index < params2[key]; index++) {
          this.arreglotemponral.unshift(0);
        }
        this.arg = this.arreglotemponral.join('');
        params1[key]= this.arg;
      }
      this.arregloBinario2.push( params1[key]);
    }
    this.tamanoArreglo= this.arregloBinario2.join('');
    params1=Array.from(this.tamanoArreglo);
    for (var llave in params1){
      params1[llave]= parseInt(params1[llave]);
    }
    return params1;
  }
  limpiar( ){
    this.arregloBinario2= [];
    this.arreglotemponral= [];
  }

  entrenar(objeto){
      console.log(this.pruebaentrada);
      this.network.train([objeto]);
  }
  redneuronal(){
    this.limpiar();
    this.prueba =this.binSal(this.pruebaentrada,this.pruebaconfiguraEntrada);
    console.log(this.prueba);
    this.salidaEntrenamiento = this.network.run(this.prueba);
    console.log(this.salidaEntrenamiento);
  }


  Entrenar (){
    for(var llave in this.entrada){
      this.limpiar();
      this.array1 = this.binSal(this.entrada[llave],this.configuraEntrada[llave]);
      this.limpiar();
      this.array2 = this.binSal(this.salida[llave],this.configuraSalida[llave]);
      this.objeto.push({'input':this.array1,'output':this.array2});
      //let fEntrada = Object.assign({},this.binSal(this.entrada[llave],this.configuraEntrada[llave]));
      //this.limpiar();
      //let fSalida = Object.assign({},this.binSal(this.salida[llave],this.configuraSalida[llave]));
      this.entrenar(this.objeto);
    }
  }
}
