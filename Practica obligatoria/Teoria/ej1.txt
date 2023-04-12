1. Qué es HTML, cuando fue creado, cuáles fueron las distintas versiones y cuál es la última?

HTML (HyperText Markup Language), es un lenguaje de marcado utilizado para crear páginas web y aplicaciones web, creado para ser mostradas en un navegador web.
HTML fue creado por Tim Berners-Lee en 1989 como parte del proyecto W3c.
Las diferentes versiones de HTML se distinguen como:
    HTML 2.0: la primera version lanzada en 1995, nunca existio HTML 1, la mayoria de los elementos head, body eran opcionales y no soportaba tablas.
    HTML 3.2: se publico en 1997 e incorporo mejoras en el texto, etc.
    HTML 4.01: publicada a fines de 1999, en ese momento la ultima version oficial de HTML.
    HTML5: desarrollada en un grupo en conjunto formado por Apple, Mozilla y Opera, a raiz de la falta de interes del W3c en HTML, se lanza en 2014 con muchas mejoras, como la posibilidad de insertar audio y video nativamente. Es la ultima revision actual de HTML y se sigue actualizando.

2. ¿Cuáles son los principios básicos que el W3C recomienda seguir para la creación de documentos
con HTML?

Utilizar etiquetas en el <head> para facilitar el trabajo de los motores de busqueda.
En una pagina con HTML, CSS y JS, separar los archivos y vincularlos con <link>
Garantizar la accesibilidad con <alt> y demas para los lectores de paginas y otras herramientas de accesibilidad.
Seguir los estandares y especificaciones de la W3C.

3. En las Especificaciones de HTML, ¿cuándo un elemento o atributo se considera desaprobado? ¿y
obsoleto?

Un elemento o atributo desaprobado es aquel que ha quedado anticuado por la presencia de estructuras nuevas.
Un elemento o atributo obsoleto es aquél para el cual no hay garantía de soporte por parte de un agente de usuario.

4. Qué es el DTD y cuáles son los posibles DTDs contemplados en la especificación de HTML 4.01?

El DTD define la sintaxis de las estructuras de formato. Se incluyen 3 en HTML 4.01:

Strict DTD: Este tipo de DTD se utiliza para documentos HTML que siguen las reglas más estrictas y rigurosas. Las etiquetas y atributos que no se ajusten a las especificaciones de este DTD no estarán permitidas.

Transitional DTD: Este tipo de DTD se utiliza para documentos HTML que incluyen etiquetas y atributos obsoletos o no recomendados.

Frameset DTD: Este tipo de DTD se utiliza para documentos HTML que incluyen marcos o "frames".

En HTML5 ya no se utilizan los DTD, se reemplaza por <!DOCTYPE>

5. Qué son los metadatos y cómo se especifican en HTML?

Es informacion adicional incluida en el <head> del documento, incluye datos utiles para el motor de busqueda, como el titulo de la pagina, palabras claves, estilo, etc.

EJ: <title>Este es un titulo</title>
    <meta> name, content, charset, etc