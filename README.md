## **Biblioteca CS**

### **Antes de empezar 🚀**
La documentación del proyecto la encuentras en la carpeta **doc**.

### **Proposito 😎**

El presente proyecto tiene la finalidad de aplicar todo lo aprendido a lo largo del semestre del curso de Ingenieria de Software carrera profesional de Ciencias de la Computación de la Universidad Nacional de San Agustín.
Ademas de ello, el presente documento tiene como propósito elicitar ,especificar y analizar los requisitos de software y definir las especificaciones funcionales y no funcionales para el desarrollo de un sistema que simula una biblioteca web.

### **Tecnologias usadas 🦾**
1. Frontend
- TailwindCss
- Html5
- Blade Templates
2. Backend
- Laravel
- Eloquent ORM
3. Gestor de Base de Datos
- MySQL
4. SysAdmin o cultura DevOps
- Laravel Sail
- Docker
- Trello


### **Principios SOLID aplicados**
1. Single-responsability o Principio de Responsabilidad Unica:
    * Si una clase tiene muchas responsabilidades, aumenta la posibilidad de errores porque hacer cambios en una de sus responsabilidades podría afectar a las otras sin que usted lo sepa.
    * "Una clase debe tener solo una razón para cambiar" Se eligió esta clase porque cumple con las características de este, es decir, la Clase User se encarga únicamente de recopilar la información de una persona como nombre, email, password.

    ![image](https://user-images.githubusercontent.com/38531618/187102312-d7325020-0e75-4edc-b064-45cc79059055.png)

    El principio de responsabilidad única busca que el código quede encapsulado y exista independencia entre las clases, sus funcionalidades. Al utilizar clases hemos procurado cumplir con este criterio, ya que encapsulamos la funcionalidad de cada una para que realicen una única función.

    ![image](https://user-images.githubusercontent.com/38531618/187102463-00755695-e1d4-43be-aa37-0567a84c2b07.png)

    Por ejemplo, en la imagen se ve que se han independizado las funciones, entre ellas editar la sesión, y otras. Esto también ayuda a la reutilización del código en caso de cambios o mantenimiento.

2. Segregación de la Interfaz:

    Según este principio es mejor tener una clase pequeña y especializada que una muy grande, para poder hacer un mejor objetivo hacia las necesidades del sistema. En nuestro trabajo, hemos procurado seguir esta norma al no sobrecargar las funcionalidades de las clases sin más de lo que se necesite. Por ejemplo en la captura se ve que cada función está dirigida a un único fin, aunque pertenezcan al mismo sistema, estan especializados.
    
    ![image](https://user-images.githubusercontent.com/38531618/187102463-00755695-e1d4-43be-aa37-0567a84c2b07.png)

3. Inversión de dependencia:
    El principio de inversión de dependencia busca reducir el acople entre sistemas de software. En nuestro caso, el sistema independiza la tecnología de bases de datos, ya que podríamos migrar con facilidad a otro sistema de bases de datos, pues utilizamos el framework Laravel, donde existe una abstracción que nos permite cambiar el tipo de BD utilizada mediante modificar algunos datos de forma sencilla. Esto nos brinda libertad para la implementación y cambiar de tecnología de BD afectando mínimamente las partes del sistema.

    ![image](https://user-images.githubusercontent.com/38531618/187102796-4e5bca87-32ff-4bb4-8677-2e689ff789e5.png)


### **Principios SOLID aplicados**
1. Modules: Cada parte del proyecto tiene un dominio que aísla los códigos formados por módulos de clases relacionadas con una funcionalidad de la aplicación.

![image](https://user-images.githubusercontent.com/38531618/187103443-f8263bdb-980a-447b-927f-d1b367e75d66.png)

2. Entities: 
Existen diferentes entidades en el Sistema que desarrollamos, entre ellas podríamos mencionar las entidades Autor, Etiqueta, Post, Categoria, Paper y Usuario ya que son objeto del dominio que mantienen un estado y comportamiento más allá de la ejecución de la aplicación. A continuación se muestra la entidad Ponente, que posee una identificación única mediante su DNI.

![image](https://user-images.githubusercontent.com/38531618/187104230-e626c711-e120-4826-b3f9-2d0e88cdbf2f.png)

3. Value Objects:
Los Value Objects (VO) son solo valores, no entidades, por si solos no significan nada, tienen que estar acompañados de una entidad para que signifiquen algo o ser interpretados. En nuestro sistema identificamos algunos Value Objects, como el siguiente:

![image](https://user-images.githubusercontent.com/38531618/187104334-ed86d260-31b1-4430-8c20-765a460272e2.png)

4. Ubiquitous Language:
Es un concepto de gran importancia porque, además de servir de vehículo de entendimiento en el negocio y entre el negocio e IT, también sirve para identificar las particiones del Domain, que darán lugar a soluciones modulares


![image](https://user-images.githubusercontent.com/38531618/187104230-e626c711-e120-4826-b3f9-2d0e88cdbf2f.png)
![image](https://user-images.githubusercontent.com/38531618/187104861-d0dce624-67dc-4f6f-942b-5bf18fd6ef90.png)
![image](https://user-images.githubusercontent.com/38531618/187104918-dd4d38b6-1382-4dfe-bb6d-400e7a00ef26.png)


5. Repository:
En nuestro proyecto tenemos clases, o más famosamente llamados controladores (MVC), que tienen la función de repositorio, ya que, son los que controlan, dirigen, a la aplicación por dónde debe ir dependiendo de lo que el usuario requiera al interactuar con dicha aplicación.

![image](https://user-images.githubusercontent.com/38531618/187105017-135eb19e-d7d9-4193-8428-d7a393ab5e56.png)
![image](https://user-images.githubusercontent.com/38531618/187105300-3a2dbde0-c942-4397-95db-bdcb4f9f73bf.png)

Un claro ejemplo sería en controlador de Usuario, que guarda diferentes funciones en donde consultamos dichos datos a la base de datos para que luego podemos actualizar un usuario dependiendo del rol del Usuario.
