1. Keep all scopes (file/class/function) small and sorted.
Haciendo uso de clases logramos mantener un codigo mas pequeño y ordenado
2. Class Name Suffixes
Las clases tienen un sufijo las cuales indican 
3. Docstrings 
4. Separate models from views and control (MVC)
El framework usado para el proyecto aplica lo que es MVC dado que todo esta separado segun esta arquitectura.
5. Coherent Abstraction

![image](https://user-images.githubusercontent.com/38531618/185838720-4a146350-97cf-4d08-b022-701adac3a4a9.png)


### **Práctica de código legible aplicadas 🤖**
* No colocar JS ni CSS en las plantillas Blade y HTML en clases de PHP.
* Convención de Laravel para los nombres, organización de archivos y carpetas: Se siguen los estándares PSR, también, sigue la convención aceptada por la comunidad. Para la organización de archivos y caroetas , técnicamente, se podría escribir el código de una aplicación completo dentro de un solo archivo. Pero eso resultaría en una pesadilla para leer y mantener. Es por ello que siguiendo el MVC se organizaron las carpetas y archivos.

Qué | Cómo | Bueno | Malo
------------ | ------------- | ------------- | -------------
Controlador | singular | ControladorPaper | ~~ControladorArticulos~~
Relaciones hasOne o belongsTo | singular | comentarioPaper | ~~comentariosArticulo, comentario_articulo~~
Propiedad de modelo | snake_case | $model->created_at | ~~$model->createdAt~~
Método | camelCase | getAll | ~~get_All~~
Vistas | kebab-case | nav-link.blade.php | ~~navLink.blade.php, nav_link.blade.php~~

A continuación se mostrará la organización de carpetas y archivos, así como el nombramiento de los modelos, controladores, y vistas:
1. Modelos

![image](https://user-images.githubusercontent.com/38531618/187097116-b5833ddb-f8a6-4ce8-ba21-02435f43a11c.png)

2. Controladores

![image](https://user-images.githubusercontent.com/38531618/187097087-a9d6e205-6f7b-471f-b753-ec4f013b8b2e.png)

3. Vistas

![image](https://user-images.githubusercontent.com/38531618/187097135-acb8f7fd-73ec-4616-b831-2a661ef6e0d0.png)


Convención de nombres para relaciones de hasOne "uno a muchos" o belongsTo "Relacion uno a muchos inversa"
![image](https://user-images.githubusercontent.com/38531618/187097220-aa74192e-f9dc-49ef-8b5a-87ce1e13593d.png)

Convención de nombres para los métodos
![image](https://user-images.githubusercontent.com/38531618/187097322-d51013ae-67c6-493f-8e45-06059c62f5b8.png)

Convención de nombre para las propiedades del controllador
![image](https://user-images.githubusercontent.com/38531618/187097515-9997599f-ef67-492f-8244-fd484abd5f9e.png)

* Utiliza sintaxis cortas y legibles siempre que sea posible
![image](https://user-images.githubusercontent.com/38531618/187097718-b975287a-e843-42b7-b477-e55fc214df64.png)

* No ejecutar consultas en las plantillas Blade y utiliza el cargado prematuro (Problema N + 1).

    Malo (Para 100 ponentes, se ejecutarán 101 consultas):
    
    ´´´
    @foreach (Post::all() as $post)
        {{ $post->name }}
    @endforeach
    ´´´
    
    Bueno:
    
    ![image](https://user-images.githubusercontent.com/38531618/187097912-fc54d778-187b-474d-8b5c-32f33162013a.png)
    ![image](https://user-images.githubusercontent.com/38531618/187097935-260541ee-3daa-4b87-8e24-c2fb9ae078a1.png)

* No colocar ningún tipo de lógica en los archivos de rutas.
![image](https://user-images.githubusercontent.com/38531618/187097969-b0e28b9d-80af-4143-85bb-92c293bc1eac.png)

* Identación consistente:
   ![image](https://user-images.githubusercontent.com/38531618/187098112-763f01d6-7806-4b62-96ae-72c86f89ffc0.png)

* Agrupación de código:

Casi siempre ciertas tareas requieren unas pocas líneas de código. Es una buena idea mantener estas tareas dentro de bloques separados de código, con algunos espacios entre ellos.
![image](https://user-images.githubusercontent.com/38531618/187098234-f09692f5-6056-4135-9e4c-4b5f8aeb67ef.png)
