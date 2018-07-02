<?php

use Illuminate\Database\Seeder;

class SeccionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creando secciones (frontend)
        DB::table('secciones')->insert([  

        /*seccion  servicios de la empresa   */  

            'seccion_nombre_servicios' => 'Servicios',             
            'seccion_titulo_servicios' => 'Nuestros servicios',
            'seccion_servicio_descripcion' => 'En Vidriería "Cerro Azul" contamos con personal altamente capacitado e insumos de primera calidad, garantizando la mejor ejecución en los proyectos contratados por los clientes en todo el Perú. Somos profesionales y responsables en lo que realizamos, por esta razón una vez recibida la orden de servicio, iniciamos labores un día después para total satisfacción de quien lo solicita.',

        /*fin de seccion servicios de la empresa*/



        /*seccion  informacion de la empresa   */  

            'seccion_nombre_nosotros' => 'Nosotros', 
            'seccion_titulo_nosotros' => 'Vidrieria "Cerro Azul"', 
            'seccion_nosotros_descripcion' => 'Vidrieria "Cerro Azul" es una empresa peruana dedicada al mundo del vidrio y aluminio, distribuidores de las mejores marcas del mercado, los cuales han depositado su confianza en nosotros para la ejecución de todo tipo de Proyectos Residenciales y Corporativos.

                <p align="justify">Nuestro compromiso es brindar el mejor servicio especializado a todos nuestros clientes con calidad y garantía teniendo como objetivo llegar a ser una empresa de servicios con alto nivel competitivo con responsabilidad social y laboral ante nuestros empleados.</p>',
            'seccion_nosotros_mision' => 'Ofrecer productos y servicios que superen las expectativas de nuestros clientes mediante nuestro excelente servicio y atención sustentados en vínculos de seguridad, confianza y calidad.',
            'seccion_nosotros_vision' => 'Ser una empresa líder y reconocida en el rubro de vidriería, estando siempre a la vanguardia a través de nuestra diversa gama de productos y servicios. Contar con un equipo de trabajo sólido, integrado, y comprometido.', 
            'section_nosotros_imagen' => '1.jpg', 

        /*fin de seccion  servicios de la empresa   */  



        /*seccion  proyectos realizados por la empresa empresa   */  

            'seccion_nombre_proyectos' => 'Nuestros Proyectos',
            'seccion_titulo_proyectos' => 'Nuestros Proyectos',

        /*fin de seccion  proyectos realizados por la empresa empresa   */  



        /*seccion  logros de la empresa   */  

            'seccion_nombre_logros' => '',
            'seccion_titulo_logros' => 'Nuestros Logros',
            'seccion_logros_block1_icono' => 'ti-face-smile',
            'seccion_logros_block1_numero' => '278',
            'seccion_logros_block1_titulo' => 'clientes satisfechos',


            'seccion_logros_block2_icono' => 'ti-timer',
            'seccion_logros_block2_numero' => '120',
            'seccion_logros_block2_titulo' => 'horas de trabajo',


            'seccion_logros_block3_icono' => 'ti-bookmark-alt',
            'seccion_logros_block3_numero' => '65',
            'seccion_logros_block3_titulo' => 'proyectos completados',


            'seccion_logros_block4_icono' => 'ti-cup',
            'seccion_logros_block4_numero' => '3',
            'seccion_logros_block4_titulo' => 'premiaciones',

        /* fin de seccion  logros de la empresa   */  



        /*seccion  equipo de trabajo */  

            'seccion_nombre_team' => 'Equipo de Trabajo',
            'seccion_titulo_team' => 'Nuestro Equipo de Trabajo',
            'seccion_team_descripcion' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',

        /* fin de seccion  equipo de trabajo */  
                


        /*seccion  testimonios */  

            'seccion_nombre_testimonios' => 'Testimonios',
            'seccion_titulo_testimonios' => 'Testimonios',

        /* fin de seccion  testimonios */  



        /*seccion  clientes  de la empresa   */  

            'seccion_titulo_proveedores' => 'Nuestros Proveedores',

        /*fin de seccion  clientes de la empresa   */  


        /*seccion  pagina formulario de contacto   */  

            'seccion_nombre_contacto' => 'Contactar',
            'seccion_titulo_contacto' => 'Contactar Vidrieria "Cerro Azul" ',

            'seccion_contacto_titulo_direccion' => 'DIRECCION',
            'seccion_contacto_direccion' => 'Cerro azul.',

            'seccion_contacto_titulo_email' => 'EMAIL',
            'seccion_contacto_email1' => 'info@testdario.com',
            'seccion_contacto_email2' => 'info@testdario.com',

            'seccion_contacto_titulo_telefono' => 'TELEFONO',
            'seccion_contacto_phone1' => '+001 1250 1234',
            'seccion_contacto_phone2' => '+001 1203 15354'

        /*fin de seccion pagina formulario de contacto  */  

        ]); 
    }
}
