<?php

namespace Database\Seeders;

use App\Helpers\SlugHelper;
use App\Models\ServiceCategory;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Online Doktor Görüşmesi',
                'meta_description' => 'Uzman hekim ve tıbbi personelimiz ile profesyonel evde sağlık hizmetleri sunuyoruz.',
                'keywords' => 'Doktor kategorileri, Uzman doktorlar, Sağlık uzmanları, Hekim kategorileri, Tıp uzmanlıkları, Medikal uzmanlar, Sağlık hizmetleri, Doktor randevu, Online doktor, Sağlık danışmanlığı, Hekim rehberi, Klinik uzmanlıklar, Hastalıklar ve tedaviler, Aile hekimleri, Özel hastane doktorları',
                'home_page_detail' => 'Sağlığınızla ilgili aklınıza takılan her konuda, online hizmet veren doktorlarımıza danışın.',
                'category_page_detail' => '',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor" aria-hidden="true" focusable="false" class=""><path d="M15.996 17.942c-4.088 0-7.411-3.323-7.411-7.411v-6.241c0-2.372 1.919-4.291 4.291-4.291h6.241c2.372 0 4.291 1.919 4.291 4.291v6.241c0 4.088-3.323 7.411-7.411 7.411zM12.876 2.341c-1.077 0-1.95 0.874-1.95 1.95v6.241c0 2.793 2.278 5.071 5.071 5.071s5.071-2.278 5.071-5.071v-6.241c0-1.077-0.874-1.95-1.95-1.95h-6.241zM20.445 21.655c-0.53 0-0.999-0.359-1.139-0.889l-1.155-4.634c-0.156-0.624 0.218-1.264 0.858-1.42 0.624-0.156 1.264 0.218 1.42 0.858l1.155 4.634c0.156 0.624-0.218 1.264-0.858 1.42-0.094 0.031-0.187 0.031-0.281 0.031zM11.563 21.656c-0.094 0-0.187 0-0.281-0.031-0.624-0.156-1.014-0.796-0.858-1.42l1.155-4.634c0.156-0.624 0.796-0.999 1.42-0.858 0.624 0.156 1.014 0.796 0.858 1.42l-1.155 4.634c-0.125 0.53-0.608 0.889-1.139 0.889zM9.756 27.319c-0.64 0-1.17-0.53-1.17-1.17v-5.991c0-0.64 0.53-1.17 1.17-1.17s1.17 0.53 1.17 1.17v5.991c0 0.64-0.53 1.17-1.17 1.17zM9.756 31.999c-1.935 0-3.51-1.576-3.51-3.51s1.576-3.51 3.51-3.51c1.935 0 3.51 1.576 3.51 3.51s-1.576 3.51-3.51 3.51zM9.756 27.319c-0.64 0-1.17 0.53-1.17 1.17s0.53 1.17 1.17 1.17c0.64 0 1.17-0.53 1.17-1.17s-0.53-1.17-1.17-1.17zM22.248 27.319c-0.64 0-1.17-0.53-1.17-1.17v-5.991c0-0.64 0.53-1.17 1.17-1.17s1.17 0.53 1.17 1.17v5.991c0 0.64-0.53 1.17-1.17 1.17zM19.553 31.999c-0.406 0-0.796-0.203-1.014-0.577-0.39-0.655-0.593-1.389-0.593-2.153 0-2.372 1.919-4.291 4.291-4.291s4.291 1.919 4.291 4.291c0 0.764-0.218 1.513-0.593 2.153-0.328 0.562-1.045 0.749-1.607 0.406-0.562-0.328-0.733-1.045-0.406-1.607 0.172-0.296 0.265-0.64 0.265-0.967 0-1.061-0.874-1.95-1.95-1.95s-1.95 0.874-1.95 1.95c0 0.328 0.094 0.671 0.265 0.967 0.328 0.562 0.14 1.279-0.421 1.607-0.187 0.109-0.39 0.156-0.593 0.156zM22.252 8.582h-12.497c-0.64 0-1.17-0.53-1.17-1.17s0.53-1.17 1.17-1.17h12.482c0.64 0 1.17 0.53 1.17 1.17s-0.53 1.17-1.17 1.17h0.016zM30.056 28.879c-0.64 0-1.17-0.53-1.17-1.17v-2.153c0-1.669-1.186-3.12-2.824-3.448l-4.447-0.889c0 0-0.125 0-0.187 0.031-3.292 2.2-7.567 2.2-10.859 0-0.047-0.031-0.125-0.047-0.187-0.031l-4.447 0.889c-1.638 0.328-2.824 1.779-2.824 3.448v2.153c0 0.64-0.53 1.17-1.17 1.17s-1.17-0.53-1.17-1.17v-2.153c0-2.777 1.981-5.195 4.712-5.742l4.447-0.889c0.671-0.14 1.357 0 1.935 0.39 2.512 1.669 5.757 1.669 8.269 0 0.577-0.374 1.248-0.515 1.935-0.39l4.447 0.889c2.73 0.546 4.712 2.964 4.712 5.742v2.153c0 0.64-0.53 1.17-1.17 1.17z"></path></svg>',
                'type' => 'online',
                'sort_order' => '0',
                'is_show_home_page' => true,
                'is_show_service_page' => true,
                'home_page_colspan' => 1,
            ],
            [
                'title' => 'Psikolog Görüşmesi',
                'meta_description' => 'Psikoloji branşları, çeşitli psikolojik testler ve uzman psikologlar hakkında kapsamlı bilgi alın."',
                'keywords' => 'Psikoloji, Psikolojik danışmanlık, Klinik psikoloji, Psikoterapi, Bireysel terapi, Aile terapisi, Çocuk psikolojisi, Ergen psikolojisi, Depresyon tedavisi, Anksiyete tedavisi, Psikolojik testler, Zihin sağlığı, Psikoloji uzmanları, Ruh sağlığı, Psikolojik destek',
                'home_page_detail' => 'Gizlilik prensibiyle, zihinsel sağlık ihtiyaçlarınıza özel kişisel danışma desteği alın.',
                'category_page_detail' => '',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor" aria-hidden="true" focusable="false" class=""><title>brain</title><path d="M16.265 1.345c1.643-1.312 3.841-1.694 5.83-1.014s3.492 2.329 3.987 4.372l0.006 0.027c0.036 0.164 0.164 0.292 0.327 0.329 2.27 0.464 4.162 2.026 5.046 4.168 0.886 2.145 0.647 4.59-0.638 6.522l-0.008 0.012v-0c-0.095 0.139-0.095 0.323 0 0.462l0.008 0.011-0 0c1.285 1.932 1.524 4.377 0.638 6.522-0.885 2.142-2.776 3.704-5.046 4.168-0.164 0.037-0.291 0.165-0.327 0.329l-0.005 0.023c-0.489 2.047-1.991 3.701-3.98 4.386s-4.191 0.305-5.837-1.007l-0.007-0.006c-0.151-0.122-0.366-0.122-0.517 0l-0.006 0.005v-0c-1.642 1.312-3.841 1.694-5.83 1.014s-3.493-2.329-3.987-4.372l-0.006-0.027c-0.036-0.164-0.163-0.292-0.327-0.329-2.27-0.464-4.161-2.025-5.046-4.166-0.887-2.144-0.648-4.589 0.636-6.521l0.009-0.013 0 0c0.095-0.14 0.095-0.324 0-0.463l-0.009-0.013 0-0c-1.284-1.932-1.522-4.377-0.636-6.521 0.885-2.141 2.777-3.703 5.046-4.166 0.164-0.037 0.291-0.165 0.327-0.329l0.006-0.025c0.492-2.045 1.995-3.696 3.984-4.379s4.189-0.302 5.833 1.010l0.006 0.005c0.134 0.109 0.32 0.12 0.466 0.035 0.018-0.017 0.037-0.033 0.057-0.048zM17.882 3.202c-0.024 0.023-0.050 0.046-0.077 0.068-1.051 0.851-2.554 0.852-3.607 0.003-0.986-0.786-2.305-1.014-3.498-0.604-1.191 0.409-2.091 1.395-2.388 2.618-0.247 1.1-1.111 1.957-2.215 2.194l-0.013 0.003v-0c-1.472 0.299-2.698 1.31-3.272 2.698-0.573 1.386-0.42 2.965 0.408 4.215 0.66 0.973 0.66 2.249 0 3.222-0.828 1.25-0.981 2.829-0.408 4.215 0.574 1.388 1.8 2.399 3.272 2.698l0.013 0.003c1.103 0.237 1.967 1.093 2.214 2.193 0.299 1.221 1.2 2.206 2.39 2.614 1.193 0.408 2.511 0.179 3.496-0.606 1.051-0.848 2.552-0.848 3.603-0 0.987 0.785 2.307 1.012 3.5 0.602 1.191-0.41 2.090-1.399 2.387-2.623 0.246-1.101 1.111-1.958 2.215-2.195l0.013-0.003v0c1.472-0.299 2.698-1.31 3.272-2.699 0.573-1.386 0.419-2.967-0.41-4.216-0.658-0.972-0.658-2.246 0-3.218 0.829-1.25 0.983-2.83 0.41-4.216-0.574-1.388-1.8-2.4-3.272-2.699l-0.013-0.003 0-0c-1.103-0.237-1.967-1.093-2.214-2.193-0.299-1.221-1.2-2.206-2.39-2.614-1.16-0.397-2.44-0.191-3.416 0.544z"></path><path d="M15.998 1.447c0.679 0 1.23 0.551 1.23 1.23v26.645c0 0.679-0.551 1.23-1.23 1.23s-1.23-0.551-1.23-1.23v-26.645c0-0.679 0.551-1.23 1.23-1.23z"></path><path d="M24.198 20.51c-1.133 0-2.051 0.918-2.051 2.051 0 0.679-0.551 1.23-1.23 1.23s-1.23-0.551-1.23-1.23c0-2.491 2.019-4.511 4.511-4.511 0.679 0 1.23 0.551 1.23 1.23s-0.551 1.23-1.23 1.23z"></path><path d="M11.083 8.209c0.679 0 1.23 0.551 1.23 1.23 0 2.491-2.019 4.511-4.511 4.511-0.679 0-1.23-0.551-1.23-1.23s0.551-1.23 1.23-1.23c1.133 0 2.051-0.918 2.051-2.051 0-0.679 0.551-1.23 1.23-1.23z"></path><path d="M6.572 19.28c0-0.679 0.551-1.23 1.23-1.23 2.491 0 4.511 2.019 4.511 4.511 0 0.679-0.551 1.23-1.23 1.23s-1.23-0.551-1.23-1.23c0-1.133-0.918-2.051-2.051-2.051-0.679 0-1.23-0.551-1.23-1.23z"></path><path d="M20.917 8.209c0.679 0 1.23 0.551 1.23 1.23 0 1.133 0.918 2.051 2.051 2.051 0.679 0 1.23 0.551 1.23 1.23s-0.551 1.23-1.23 1.23c-2.491 0-4.511-2.019-4.511-4.511 0-0.679 0.551-1.23 1.23-1.23z"></path></svg>',
                'type' => 'online',
                'sort_order' => '1',
                'is_show_home_page' => true,
                'is_show_service_page' => true,
                'home_page_colspan' => 1,
            ],
            [
                'title' => 'Evde Hemşirelik Hizmetleri',
                'meta_description' => 'Evde Hemşirelik Hizmetleri hızlı ve güvenli bir şekilde 360 Sağlık ile sen neredeysen, sağlık orada!',
                'keywords' => 'Evde hemşirelik, Hemşirelik hizmetleri, Evde sağlık hizmetleri, Sağlık hizmetleri, Bakım hizmetleri, Hemşire hizmetleri, Hasta bakımı, Kronik hastalık bakımı, Yaşlı bakımı, Evde tedavi, Hemşirelik hizmetleri fiyatları, Evde ilaç yönetimi, Rehabilitasyon hizmetleri, Evde bakım hemşiresi, Sağlık danışmanlığı',
                'home_page_detail' => 'İhtiyacınız olan tedavi sürecini evinizin konforunda, uzman hemşirelerimizle gerçekleştirelim.',
                'category_page_detail' => 'Hizmet kapsamına giren tüm ihtiyaçlarınızı uzman hemşirelerimiz aracılığıyla pratik ve güvenli bir şekilde karşılıyoruz.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor" aria-hidden="true" focusable="false" class=""><path d="M15.996 17.942c-4.088 0-7.411-3.323-7.411-7.411v-6.241c0-2.372 1.919-4.291 4.291-4.291h6.241c2.372 0 4.291 1.919 4.291 4.291v6.241c0 4.088-3.323 7.411-7.411 7.411zM12.876 2.341c-1.077 0-1.95 0.874-1.95 1.95v6.241c0 2.793 2.278 5.071 5.071 5.071s5.071-2.278 5.071-5.071v-6.241c0-1.077-0.874-1.95-1.95-1.95h-6.241zM20.445 21.655c-0.53 0-0.999-0.359-1.139-0.889l-1.155-4.634c-0.156-0.624 0.218-1.264 0.858-1.42 0.624-0.156 1.264 0.218 1.42 0.858l1.155 4.634c0.156 0.624-0.218 1.264-0.858 1.42-0.094 0.031-0.187 0.031-0.281 0.031zM11.563 21.656c-0.094 0-0.187 0-0.281-0.031-0.624-0.156-1.014-0.796-0.858-1.42l1.155-4.634c0.156-0.624 0.796-0.999 1.42-0.858 0.624 0.156 1.014 0.796 0.858 1.42l-1.155 4.634c-0.125 0.53-0.608 0.889-1.139 0.889zM9.756 27.319c-0.64 0-1.17-0.53-1.17-1.17v-5.991c0-0.64 0.53-1.17 1.17-1.17s1.17 0.53 1.17 1.17v5.991c0 0.64-0.53 1.17-1.17 1.17zM9.756 31.999c-1.935 0-3.51-1.576-3.51-3.51s1.576-3.51 3.51-3.51c1.935 0 3.51 1.576 3.51 3.51s-1.576 3.51-3.51 3.51zM9.756 27.319c-0.64 0-1.17 0.53-1.17 1.17s0.53 1.17 1.17 1.17c0.64 0 1.17-0.53 1.17-1.17s-0.53-1.17-1.17-1.17zM22.248 27.319c-0.64 0-1.17-0.53-1.17-1.17v-5.991c0-0.64 0.53-1.17 1.17-1.17s1.17 0.53 1.17 1.17v5.991c0 0.64-0.53 1.17-1.17 1.17zM19.553 31.999c-0.406 0-0.796-0.203-1.014-0.577-0.39-0.655-0.593-1.389-0.593-2.153 0-2.372 1.919-4.291 4.291-4.291s4.291 1.919 4.291 4.291c0 0.764-0.218 1.513-0.593 2.153-0.328 0.562-1.045 0.749-1.607 0.406-0.562-0.328-0.733-1.045-0.406-1.607 0.172-0.296 0.265-0.64 0.265-0.967 0-1.061-0.874-1.95-1.95-1.95s-1.95 0.874-1.95 1.95c0 0.328 0.094 0.671 0.265 0.967 0.328 0.562 0.14 1.279-0.421 1.607-0.187 0.109-0.39 0.156-0.593 0.156zM22.252 8.582h-12.497c-0.64 0-1.17-0.53-1.17-1.17s0.53-1.17 1.17-1.17h12.482c0.64 0 1.17 0.53 1.17 1.17s-0.53 1.17-1.17 1.17h0.016zM30.056 28.879c-0.64 0-1.17-0.53-1.17-1.17v-2.153c0-1.669-1.186-3.12-2.824-3.448l-4.447-0.889c0 0-0.125 0-0.187 0.031-3.292 2.2-7.567 2.2-10.859 0-0.047-0.031-0.125-0.047-0.187-0.031l-4.447 0.889c-1.638 0.328-2.824 1.779-2.824 3.448v2.153c0 0.64-0.53 1.17-1.17 1.17s-1.17-0.53-1.17-1.17v-2.153c0-2.777 1.981-5.195 4.712-5.742l4.447-0.889c0.671-0.14 1.357 0 1.935 0.39 2.512 1.669 5.757 1.669 8.269 0 0.577-0.374 1.248-0.515 1.935-0.39l4.447 0.889c2.73 0.546 4.712 2.964 4.712 5.742v2.153c0 0.64-0.53 1.17-1.17 1.17z"></path></svg>',
                'type' => 'home_office',
                'sort_order' => '2',
                'is_show_home_page' => true,
                'is_show_service_page' => true,
                'home_page_colspan' => 1,
            ],
            [
                'title' => 'Evde Bakım Hizmetleri',
                'meta_description' => 'Uzman hekim ve tıbbi personelimiz ile profesyonel evde sağlık hizmetleri sunuyoruz.',
                'keywords' => 'Evde bakım, Bakım hizmetleri, Evde sağlık hizmetleri, Hasta bakımı, Yaşlı bakımı, Kronik hastalık bakımı, Rehabilitasyon hizmetleri, Evde hemşirelik, Domiciliary care, Evde ilaç yönetimi, Bireysel bakım, Evde bakım fiyatları, Sağlık hizmetleri, Uzman bakım, Bakım planı, Sağlık danışmanlığı',
                'home_page_detail' => 'Sağlık sorunlarınıza yönelik deneyimli sağlık ekibimizden profesyonel destek alın.',
                'category_page_detail' => 'Profesyonel sağlık ekibimiz ile bebekler, hasta ve yaşlı bireyler için evde bakım hizmeti veriyoruz.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor" aria-hidden="true" focusable="false" class=""><title>package_box_home</title><path d="M15.993 19.237c-0.672 0-1.23-0.558-1.23-1.23v-5.281c0-0.672 0.558-1.23 1.23-1.23s1.23 0.558 1.23 1.23v5.281c0 0.672-0.558 1.23-1.23 1.23z"></path><path d="M21.744 23.748c-0.672 0-1.23-0.558-1.23-1.23v-3.248l-8.988-0.049-0.049 3.28c0 0.672-0.558 1.23-1.23 1.23s-1.23-0.558-1.23-1.23v-3.248c0-1.378 1.132-2.51 2.509-2.51h8.939c1.378 0 2.509 1.132 2.509 2.51v3.248c0 0.672-0.558 1.23-1.23 1.23v0.016z"></path><path d="M20.087 25.437h-8.201c-1.591 0-2.87-1.296-2.87-2.87v-5.856c0-0.836 0.164-1.657 0.492-2.411l0.459-1.066c0.459-1.066 1.493-1.739 2.641-1.739h6.774c1.148 0 2.181 0.689 2.641 1.739l0.459 1.066c0.328 0.771 0.492 1.575 0.492 2.411v5.856c0 1.575-1.296 2.87-2.87 2.87h-0.016zM12.608 13.956c-0.164 0-0.312 0.098-0.377 0.246l-0.459 1.066c-0.197 0.459-0.295 0.951-0.295 1.443v5.856c0 0.23 0.18 0.41 0.41 0.41h8.201c0.23 0 0.41-0.18 0.41-0.41v-5.856c0-0.508-0.098-0.984-0.295-1.46l-0.459-1.066c-0.066-0.148-0.213-0.246-0.377-0.246h-6.758v0.016z"></path><path d="M25.849 31.998h-19.699c-3.395 0-6.151-2.756-6.151-6.151v-12.039c0-1.919 0.869-3.674 2.378-4.855l9.841-7.66c2.231-1.722 5.331-1.722 7.561 0l9.841 7.66c1.509 1.165 2.378 2.936 2.378 4.855v12.039c0 3.395-2.755 6.151-6.151 6.151zM15.992 2.458c-0.804 0-1.607 0.262-2.263 0.771l-9.841 7.66c-0.902 0.705-1.427 1.771-1.427 2.92v12.039c0 2.034 1.657 3.691 3.69 3.691h19.699c2.034 0 3.69-1.657 3.69-3.691v-12.039c0-1.148-0.525-2.214-1.427-2.92l-9.841-7.66c-0.673-0.525-1.46-0.771-2.264-0.771h-0.016z"></path></svg>',
                'type' => 'home_office',
                'sort_order' => '3',
                'is_show_home_page' => true,
                'is_show_service_page' => true,
                'home_page_colspan' => 1,
            ],
            [
                'title' => 'Evde Serum Hizmetleri',
                'meta_description' => 'Evde Serum Hizmetleri hızlı ve güvenli bir şekilde Sultan Park ile sen neredeysen, sağlık orada!',
                'keywords' => 'Evde serum hizmetleri, Serum uygulama, Evde tedavi, Damardan serum, Sağlık hizmetleri, Evde sağlık hizmetleri, Hemşirelik hizmetleri, Hasta bakımı, İlaç yönetimi, Serum tedavisi, Kronik hastalık bakımı, Evde hemşirelik, Mobil sağlık hizmetleri, Evde bakım, Sağlık danışmanlığı',
                'home_page_detail' => 'Evinizin konforunda ihtiyacınız olan serum tedavi hizmetini gerçekleştirelim.',
                'category_page_detail' => 'Genel sağlığınızı desteklemek amacıyla doktorunuzun reçete ettiği serumu bulunduğunuz yerde uyguluyoruz.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor" aria-hidden="true" focusable="false" class=""><title>crutches</title><path d="M12.32 21.908c0.436 0.436 0.436 1.143 0 1.579l-5.953 5.953c-0.436 0.436-1.143 0.436-1.579 0s-0.436-1.143 0-1.579l5.953-5.953c0.436-0.436 1.143-0.436 1.579 0z"></path><path d="M20.937 7.34c0.436 0.436 0.436 1.143 0 1.579l-7.742 7.743c0 0-0 0-0 0-0.349 0.349-0.545 0.822-0.545 1.315v3.604h3.604c0.493 0 0.967-0.196 1.315-0.545l7.743-7.743c0.436-0.436 1.143-0.436 1.579 0s0.436 1.143 0 1.579l-7.743 7.742c-0.768 0.768-1.809 1.199-2.894 1.199h-4.72c-0.616 0-1.116-0.5-1.116-1.116v-4.72c0-1.085 0.431-2.127 1.199-2.894v0l7.743-7.743c0.436-0.436 1.143-0.436 1.579 0z"></path><path d="M13.718 12.978c0.436-0.436 1.143-0.436 1.579 0l5.953 5.953c0.436 0.436 0.436 1.143 0 1.579s-1.143 0.436-1.579 0l-5.953-5.953c-0.436-0.436-0.436-1.143 0-1.579z"></path><path d="M19.358 3.197c1.285-1.285 3.368-1.285 4.653 0l7.026 7.026c1.285 1.285 1.285 3.368 0 4.653l-0.533 0.533c-1.285 1.285-3.368 1.285-4.653 0l-7.026-7.026c-1.285-1.285-1.285-3.368 0-4.653l0.533-0.533zM22.432 4.776c-0.413-0.413-1.083-0.413-1.496 0l-0.533 0.533c-0.413 0.413-0.413 1.083 0 1.496l7.026 7.026c0.413 0.413 1.083 0.413 1.496 0l0.533-0.533c0.413-0.413 0.413-1.083 0-1.496l-7.026-7.026z"></path><path d="M11.058 7.34c0.436-0.436 1.143-0.436 1.579 0l1.173 1.173c0.436 0.436 0.436 1.143 0 1.579s-1.143 0.436-1.579 0l-1.173-1.173c-0.436-0.436-0.436-1.143 0-1.579z"></path><path d="M5.102 13.294c0.436-0.436 1.143-0.436 1.579 0l1.917 1.917c0.436 0.436 0.436 1.143 0 1.579s-1.143 0.436-1.579 0l-1.917-1.917c-0.436-0.436-0.436-1.143 0-1.579z"></path><path d="M13.175 3.73c1.285 1.285 1.285 3.368 0 4.653l-7.026 7.026c-1.285 1.285-3.368 1.285-4.653-0l-0.533-0.533c-1.285-1.285-1.285-3.368 0-4.653l7.026-7.026c1.285-1.285 3.368-1.285 4.653 0l0.533 0.533zM11.596 6.804c0.413-0.413 0.413-1.083 0-1.496l-0.533-0.533c-0.413-0.413-1.083-0.413-1.496 0l-7.026 7.026c-0.413 0.413-0.413 1.083 0 1.496l0.533 0.533c0.413 0.413 1.083 0.413 1.496 0l7.026-7.026z"></path><path d="M21.165 23.396c0.436-0.436 1.143-0.436 1.579 0l4.465 4.465c0.436 0.436 0.436 1.143 0 1.579s-1.143 0.436-1.579 0l-4.465-4.465c-0.436-0.436-0.436-1.143 0-1.579z"></path></svg>',
                'type' => 'home_office',
                'sort_order' => '4',
                'is_show_home_page' => true,
                'is_show_service_page' => true,
                'home_page_colspan' => 1,
            ],
            [
                'title' => 'Evde Doktor Desteği',
                'meta_description' => 'Evde Doktor Hizmetleri hızlı ve güvenli bir şekilde Sultan Park ile sen neredeysen, sağlık orada!',
                'keywords' => 'Evde doktor hizmetleri, Evde muayene, Mobil sağlık hizmetleri, Uzman doktor, Evde sağlık hizmetleri, Hasta bakımı, Sağlık danışmanlığı, Evde tedavi, Acil doktor hizmetleri, Klinik muayene, Online doktor, Evde bakım, Sağlık hizmetleri, Tıbbi destek, Evde sağlık kontrolleri, Kronik hastalık bakımı',
                'home_page_detail' => 'Uzman doktorlarımızla sağlık sorununuzun tespiti ve tedavisi için evinizin konforunda muayenenizi yaptırın.',
                'category_page_detail' => 'Uzman doktorlarımızla sağlık sorununuzun tespiti ve tedavisi için evinizin konforunda muayenenizi yapıyoruz.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor" aria-hidden="true" focusable="false" class=""><path d="M15.996 17.942c-4.088 0-7.411-3.323-7.411-7.411v-6.241c0-2.372 1.919-4.291 4.291-4.291h6.241c2.372 0 4.291 1.919 4.291 4.291v6.241c0 4.088-3.323 7.411-7.411 7.411zM12.876 2.341c-1.077 0-1.95 0.874-1.95 1.95v6.241c0 2.793 2.278 5.071 5.071 5.071s5.071-2.278 5.071-5.071v-6.241c0-1.077-0.874-1.95-1.95-1.95h-6.241zM20.445 21.655c-0.53 0-0.999-0.359-1.139-0.889l-1.155-4.634c-0.156-0.624 0.218-1.264 0.858-1.42 0.624-0.156 1.264 0.218 1.42 0.858l1.155 4.634c0.156 0.624-0.218 1.264-0.858 1.42-0.094 0.031-0.187 0.031-0.281 0.031zM11.563 21.656c-0.094 0-0.187 0-0.281-0.031-0.624-0.156-1.014-0.796-0.858-1.42l1.155-4.634c0.156-0.624 0.796-0.999 1.42-0.858 0.624 0.156 1.014 0.796 0.858 1.42l-1.155 4.634c-0.125 0.53-0.608 0.889-1.139 0.889zM9.756 27.319c-0.64 0-1.17-0.53-1.17-1.17v-5.991c0-0.64 0.53-1.17 1.17-1.17s1.17 0.53 1.17 1.17v5.991c0 0.64-0.53 1.17-1.17 1.17zM9.756 31.999c-1.935 0-3.51-1.576-3.51-3.51s1.576-3.51 3.51-3.51c1.935 0 3.51 1.576 3.51 3.51s-1.576 3.51-3.51 3.51zM9.756 27.319c-0.64 0-1.17 0.53-1.17 1.17s0.53 1.17 1.17 1.17c0.64 0 1.17-0.53 1.17-1.17s-0.53-1.17-1.17-1.17zM22.248 27.319c-0.64 0-1.17-0.53-1.17-1.17v-5.991c0-0.64 0.53-1.17 1.17-1.17s1.17 0.53 1.17 1.17v5.991c0 0.64-0.53 1.17-1.17 1.17zM19.553 31.999c-0.406 0-0.796-0.203-1.014-0.577-0.39-0.655-0.593-1.389-0.593-2.153 0-2.372 1.919-4.291 4.291-4.291s4.291 1.919 4.291 4.291c0 0.764-0.218 1.513-0.593 2.153-0.328 0.562-1.045 0.749-1.607 0.406-0.562-0.328-0.733-1.045-0.406-1.607 0.172-0.296 0.265-0.64 0.265-0.967 0-1.061-0.874-1.95-1.95-1.95s-1.95 0.874-1.95 1.95c0 0.328 0.094 0.671 0.265 0.967 0.328 0.562 0.14 1.279-0.421 1.607-0.187 0.109-0.39 0.156-0.593 0.156zM22.252 8.582h-12.497c-0.64 0-1.17-0.53-1.17-1.17s0.53-1.17 1.17-1.17h12.482c0.64 0 1.17 0.53 1.17 1.17s-0.53 1.17-1.17 1.17h0.016zM30.056 28.879c-0.64 0-1.17-0.53-1.17-1.17v-2.153c0-1.669-1.186-3.12-2.824-3.448l-4.447-0.889c0 0-0.125 0-0.187 0.031-3.292 2.2-7.567 2.2-10.859 0-0.047-0.031-0.125-0.047-0.187-0.031l-4.447 0.889c-1.638 0.328-2.824 1.779-2.824 3.448v2.153c0 0.64-0.53 1.17-1.17 1.17s-1.17-0.53-1.17-1.17v-2.153c0-2.777 1.981-5.195 4.712-5.742l4.447-0.889c0.671-0.14 1.357 0 1.935 0.39 2.512 1.669 5.757 1.669 8.269 0 0.577-0.374 1.248-0.515 1.935-0.39l4.447 0.889c2.73 0.546 4.712 2.964 4.712 5.742v2.153c0 0.64-0.53 1.17-1.17 1.17z"></path></svg>',
                'type' => 'home_office',
                'sort_order' => '5',
                'is_show_home_page' => true,
                'is_show_service_page' => true,
                'home_page_colspan' => 1,
            ],
            [
                'title' => 'Evde Laboratuvar Hizmetleri',
                'meta_description' => 'Uzman hekim ve tıbbi personelimiz ile profesyonel evde sağlık hizmetleri sunuyoruz.',
                'keywords' => 'Evde laboratuvar hizmetleri, Kan testleri, Tıbbi analiz, Evde sağlık hizmetleri, Mobil laboratuvar, Hasta bakımı, Laboratuvar testleri, Sağlık hizmetleri, Evde muayene, Kan alma hizmetleri, Tıbbi destek, Evde bakım, Laboratuvar sonuçları, Sağlık danışmanlığı, Biyokimya testleri',
                'home_page_detail' => 'Rutin kontrol için veya doktor tavsiyesi doğrultusunda bulunduğunuz yere gelerek gerekli tahlilleri yapıyoruz.',
                'category_page_detail' => 'Rutin kontrol için veya doktor tavsiyesi doğrultusunda bulunduğunuz yere gelerek gerekli tahlilleri yapıyoruz.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor" aria-hidden="true" focusable="false" class=""><title>microscope</title><path d="M2.503 21.246c0-0.66 0.535-1.195 1.195-1.195h9.559c0.66 0 1.195 0.535 1.195 1.195s-0.535 1.195-1.195 1.195h-9.559c-0.66 0-1.195-0.535-1.195-1.195z"></path><path d="M10.715 10.831c-0.182-0.182-0.485-0.146-0.62 0.070l-0.717 1.15c-0.099 0.159-0.075 0.363 0.055 0.493l2.814 2.814c-0-0 0 0 0 0 0.122 0.121 0.304 0.151 0.453 0.079l1.266-0.604c0.247-0.118 0.305-0.445 0.109-0.64l-3.361-3.362zM8.067 9.637c0.949-1.523 3.070-1.764 4.338-0.496l3.362 3.362c1.36 1.36 0.968 3.658-0.77 4.487l-1.263 0.603c-0 0 0-0 0 0-1.068 0.511-2.339 0.289-3.173-0.542l-2.816-2.816c-0.918-0.918-1.079-2.346-0.394-3.446l0.717-1.151c0-0-0 0 0 0z"></path><path d="M15.246 13.281c0-0.66 0.535-1.195 1.195-1.195h0.706c4.179 0 7.567 3.388 7.567 7.567s-3.388 7.567-7.567 7.567c-3.532 0-6.461-2.425-7.304-5.674-0.166-0.639 0.218-1.291 0.856-1.457s1.291 0.218 1.457 0.856c0.581 2.238 2.591 3.885 4.991 3.885 2.859 0 5.178-2.318 5.178-5.178s-2.318-5.178-5.178-5.178h-0.706c-0.66 0-1.195-0.535-1.195-1.195z"></path><path d="M19.519 8.696c0.207-0.627 0.883-0.966 1.51-0.759 4.915 1.625 8.468 6.25 8.468 11.716 0 6.819-5.528 12.347-12.347 12.347-6.223 0-11.35-4.604-12.207-10.584-0.094-0.653 0.36-1.259 1.013-1.352s1.259 0.36 1.352 1.013c0.691 4.825 4.83 8.534 9.842 8.534 5.499 0 9.957-4.458 9.957-9.957 0-4.402-2.861-8.135-6.829-9.447-0.626-0.207-0.966-0.883-0.759-1.51z"></path><path d="M17.519 4.897c-0.154-0.154-0.405-0.156-0.562 0.001l-5.479 5.479c-0.467 0.467-1.223 0.467-1.69 0s-0.467-1.223 0-1.69l5.479-5.479c1.089-1.089 2.854-1.090 3.943 0 0 0 0 0 0.001 0.001l2.526 2.526c1.089 1.089 1.090 2.854-0 3.943l0-0-0.845-0.845 0.844 0.846z"></path><path d="M5.686 30.805c0-0.66 0.535-1.195 1.195-1.195h20.711c0.66 0 1.195 0.535 1.195 1.195s-0.535 1.195-1.195 1.195h-20.711c-0.66 0-1.195-0.535-1.195-1.195z"></path><path d="M19.248 0.818c1.089-1.091 2.854-1.089 3.943-0l0.932 0.932c-0-0 0 0 0 0 1.091 1.089 1.090 2.855 0.001 3.944l-2.114 2.114c-0.467 0.467-1.223 0.467-1.69 0s-0.467-1.223 0-1.69l2.114-2.114c0.157-0.157 0.155-0.408 0.001-0.562l-0.935-0.935c-0.157-0.157-0.408-0.155-0.562-0.001l-2.114 2.114c-0.467 0.467-1.223 0.467-1.69 0s-0.467-1.223 0-1.69l2.112-2.112c0-0-0 0 0 0z"></path></svg>',
                'type' => 'home_office',
                'sort_order' => '6',
                'is_show_home_page' => true,
                'is_show_service_page' => true,
                'home_page_colspan' => 1,
            ],
            [
                'title' => 'Evde Görüntüleme Hizmetleri',
                'meta_description' => 'Uzman hekim ve tıbbi personelimiz ile profesyonel evde sağlık hizmetleri sunuyoruz.',
                'keywords' => 'Evde görüntüleme hizmetleri, Röntgen, Ultrason, MRI, CT taraması, Evde sağlık hizmetleri, Mobil görüntüleme, Hasta bakımı, Tıbbi görüntüleme, Sağlık hizmetleri, Evde muayene, Görüntüleme teknikleri, Tıbbi destek, Evde bakım, Sağlık danışmanlığı, Tanı hizmetleri',
                'home_page_detail' => 'Kontrol amaçlı istediğiniz veya hekiminizin hastalığın tanısı ya da tedavisi sürecinde talep ettiği tıbbi testleri uyguluyoruz.',
                'category_page_detail' => 'Kontrol amaçlı istediğiniz veya hekiminizin hastalığın tanısı ya da tedavisi sürecinde talep ettiği tıbbi testleri uyguluyoruz.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor" aria-hidden="true" focusable="false" class=""><title>xray_bones</title><path d="M12.71 0c0.679 0 1.23 0.551 1.23 1.23v3.571c0 0.761-0.302 1.491-0.844 2.031-0 0-0.001 0.001-0.001 0.001l-1.806 1.806c-0.839 0.839-0.839 2.2 0 3.039s2.2 0.839 3.039 0l0.798-0.798c0.231-0.231 0.544-0.36 0.87-0.36s0.639 0.13 0.87 0.36l0.798 0.798c0.839 0.839 2.2 0.839 3.039 0s0.839-2.2 0-3.039l-1.806-1.806c-0-0-0.001-0.001-0.001-0.001-0.542-0.54-0.842-1.273-0.842-2.031v-3.571c0-0.679 0.551-1.23 1.23-1.23s1.23 0.551 1.23 1.23v3.571c0 0.111 0.044 0.214 0.118 0.288l0.002 0.002 1.809 1.808c1.8 1.8 1.8 4.719 0 6.519-1.776 1.776-4.641 1.8-6.446 0.071-1.805 1.729-4.67 1.705-6.446-0.071-1.8-1.8-1.8-4.719 0-6.519l1.811-1.811c0.077-0.077 0.12-0.18 0.12-0.288v-3.571c0-0.679 0.551-1.23 1.23-1.23z"></path><path d="M6.154 2.461c-2.040 0-3.693 1.653-3.693 3.693v19.693c0 2.040 1.653 3.693 3.693 3.693h19.693c2.040 0 3.693-1.653 3.693-3.693v-19.693c0-2.040-1.653-3.693-3.693-3.693h-19.693zM0 6.154c0-3.399 2.755-6.154 6.154-6.154h19.693c3.399 0 6.154 2.755 6.154 6.154v19.693c0 3.399-2.755 6.153-6.154 6.153h-19.693c-3.399 0-6.154-2.755-6.154-6.153v-19.693z"></path><path d="M14.337 20.321c-0.839-0.839-2.2-0.839-3.039 0s-0.839 2.2 0 3.039l1.806 1.806c0 0 0.001 0.001 0.001 0.001 0.542 0.54 0.842 1.273 0.842 2.031v3.571c0 0.679-0.551 1.23-1.23 1.23s-1.23-0.551-1.23-1.23v-3.571c0-0.111-0.044-0.214-0.118-0.288l-0.002-0.002-1.808-1.809c-1.8-1.8-1.8-4.719 0-6.519 1.776-1.776 4.641-1.8 6.446-0.071 1.805-1.729 4.67-1.705 6.446 0.071 1.8 1.8 1.8 4.719 0 6.519l-1.808 1.809c-0.078 0.078-0.121 0.182-0.121 0.29v3.571c0 0.679-0.551 1.23-1.23 1.23s-1.23-0.551-1.23-1.23v-3.571c0-0.761 0.302-1.491 0.841-2.030l1.809-1.809c0.839-0.839 0.839-2.2 0-3.039s-2.2-0.839-3.039 0l-0.798 0.798c-0.48 0.48-1.259 0.48-1.74 0l-0.798-0.798z"></path></svg>',
                'type' => 'home_office',
                'sort_order' => '7',
                'is_show_home_page' => true,
                'is_show_service_page' => true,
                'home_page_colspan' => 1,
            ],
            [
                'title' => 'Genetik Check-Up ve İnceleme',
                'meta_description' => 'Uzman hekim ve tıbbi personelimiz ile profesyonel evde sağlık hizmetleri sunuyoruz.',
                'keywords' => 'Genetik check-up hizmetleri, Genetik inceleme, Genetik testler, Kalıtsal hastalıklar, DNA analizi, Evde sağlık hizmetleri, Sağlık danışmanlığı, Biyomarkerler, Kişiselleştirilmiş tıp, Genetik danışmanlık, Tıbbi destek, Aile sağlığı, Genetik risk değerlendirmesi, Sağlık hizmetleri, Genetik tarama hizmetleri',
                'home_page_detail' => 'Olası genetik hastalıkların erken teşhisi için gerekli check-up paketlerimizi uyguluyor, sonuçlarını değerlendiriyoruz.',
                'category_page_detail' => 'Olası genetik hastalıkların erken teşhisi için gerekli check-up paketlerimizi uyguluyor, sonuçlarını değerlendiriyoruz.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor" aria-hidden="true" focusable="false" class=""><title>dna</title><path d="M7.138 0c0.68 0 1.231 0.551 1.231 1.231 0 6.751 3.96 10.108 8.419 13.824l0.093 0.077c4.379 3.648 9.212 7.675 9.212 15.637 0 0.68-0.551 1.231-1.231 1.231s-1.231-0.551-1.231-1.231c0-6.751-3.96-10.108-8.419-13.824l-0.093-0.077c-4.378-3.648-9.211-7.675-9.211-15.637 0-0.68 0.551-1.231 1.231-1.231z"></path><path d="M24.862 0c0.68 0 1.231 0.551 1.231 1.231 0 7.962-4.833 11.989-9.212 15.637l-0.093 0.077c-4.459 3.716-8.419 7.073-8.419 13.824 0 0.68-0.551 1.231-1.231 1.231s-1.231-0.551-1.231-1.231c0-7.962 4.833-11.989 9.211-15.637l0.093-0.077c4.459-3.716 8.419-7.073 8.419-13.824 0-0.68 0.551-1.231 1.231-1.231z"></path><path d="M5.973 2.708c0-0.68 0.551-1.231 1.231-1.231h17.592c0.68 0 1.231 0.551 1.231 1.231s-0.551 1.231-1.231 1.231h-17.592c-0.68 0-1.231-0.551-1.231-1.231z"></path><path d="M7.778 8.615c0-0.68 0.551-1.231 1.231-1.231h13.982c0.68 0 1.231 0.551 1.231 1.231s-0.551 1.231-1.231 1.231h-13.982c-0.68 0-1.231-0.551-1.231-1.231z"></path><path d="M5.973 29.292c0-0.68 0.551-1.231 1.231-1.231h17.592c0.68 0 1.231 0.551 1.231 1.231s-0.551 1.231-1.231 1.231h-17.592c-0.68 0-1.231-0.551-1.231-1.231z"></path><path d="M7.778 23.385c0-0.68 0.551-1.231 1.231-1.231h13.883c0.68 0 1.231 0.551 1.231 1.231s-0.551 1.231-1.231 1.231h-13.883c-0.68 0-1.231-0.551-1.231-1.231z"></path></svg>',
                'type' => 'home_office',
                'sort_order' => '8',
                'is_show_home_page' => true,
                'is_show_service_page' => true,
                'home_page_colspan' => 1,
            ],
            [
                'title' => 'Check-Up Hizmeti',
                'meta_description' => 'Uzman hekim ve tıbbi personelimiz ile profesyonel evde sağlık hizmetleri sunuyoruz.',
                'keywords' => 'Check-up hizmeti, Sağlık taraması, Genel sağlık kontrolü, Önleyici sağlık hizmetleri, Tıbbi değerlendirme, Laboratuvar testleri, Rutin muayene, Kalp sağlığı, Kanser taraması, Diyabet kontrolü, Kolesterol testi, Sağlık danışmanlığı, Yaşlılık sağlık kontrolü, Biyokimya testleri, Fiziksel muayene',
                'home_page_detail' => 'Yaşınıza ve sağlık durumunuza uygun, kişiye özgü check-up paketlerimizi evinizde gerçekleştiriyoruz.',
                'category_page_detail' => 'Yaşınıza ve sağlık durumunuza uygun, kişiye özgü check-up paketlerimizi evinizde gerçekleştiriyoruz.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor" aria-hidden="true" focusable="false" class=""><title>heart_search</title><path d="M0.779 7.414c0-3.233 2.621-5.853 5.853-5.853h4.683c0.646 0 1.17 0.524 1.17 1.17s-0.524 1.17-1.17 1.17h-4.683c-1.94 0-3.513 1.573-3.513 3.513v9.366c0 0.646-0.524 1.17-1.17 1.17s-1.17-0.524-1.17-1.17v-9.366z"></path><path d="M30.051 20.293c0.646 0 1.17 0.524 1.17 1.17v4.683c0 3.233-2.621 5.853-5.853 5.853h-9.366c-0.646 0-1.17-0.524-1.17-1.17s0.524-1.17 1.17-1.17h9.366c1.94 0 3.513-1.573 3.513-3.513v-4.683c0-0.646 0.524-1.17 1.17-1.17z"></path><path d="M22.246 2.341c-2.802 0-5.074 2.272-5.074 5.074s2.272 5.074 5.074 5.074c2.802 0 5.074-2.272 5.074-5.074s-2.272-5.074-5.074-5.074zM14.831 7.414c0-4.095 3.319-7.414 7.414-7.414s7.414 3.32 7.414 7.414-3.319 7.414-7.414 7.414c-4.095 0-7.414-3.319-7.414-7.414z"></path><path d="M25.825 11.001c0.457-0.457 1.198-0.457 1.655 0l3.39 3.391c0.457 0.457 0.457 1.198 0 1.655s-1.198 0.457-1.655 0l-3.39-3.39c-0.457-0.457-0.457-1.198 0-1.655z"></path><path d="M5.4 21.853c-0.604 0-1.182 0.243-1.604 0.675-0.902 0.922-0.903 2.395-0.001 3.317 0 0 0.001 0.001 0.001 0.001l3.302 3.352c0.288 0.295 0.683 0.461 1.095 0.461s0.807-0.166 1.095-0.461l0.003-0.003 3.299-3.35c0-0 0.001-0.001 0.001-0.001 0.901-0.922 0.901-2.396-0.001-3.317-0.422-0.431-1-0.675-1.604-0.675s-1.182 0.243-1.604 0.674l-0.003 0.003-0.353 0.358c-0.22 0.223-0.52 0.349-0.834 0.349s-0.614-0.126-0.834-0.349l-0.356-0.361c-0.422-0.431-1-0.675-1.604-0.675zM14.263 20.891c1.793 1.832 1.793 4.761 0 6.593l-0.003 0.003-3.299 3.35c-0 0-0.001 0.001-0.001 0.002-0.728 0.744-1.726 1.163-2.767 1.163s-2.038-0.419-2.767-1.163c-0-0-0.001-0.001-0.001-0.002l-3.302-3.352c-1.793-1.832-1.793-4.761-0-6.593zM14.263 20.891c-0.862-0.881-2.043-1.378-3.277-1.378-1.016 0-1.997 0.337-2.793 0.949-0.796-0.612-1.777-0.949-2.793-0.949-1.233 0-2.414 0.497-3.277 1.378z"></path></svg>',
                'type' => 'home_office',
                'sort_order' => '9',
                'is_show_home_page' => true,
                'is_show_service_page' => true,
                'home_page_colspan' => 1,
            ],
            [
                'title' => 'E-Reçete',
                'meta_description' => 'Uzman hekim ve tıbbi personelimiz ile profesyonel evde sağlık hizmetleri sunuyoruz.',
                'keywords' => 'Anında doktor, Online doktor, Hızlı sağlık danışmanlığı, Telemedicine hizmetleri, Sanal muayene, Uzman hekim, Acil sağlık hizmetleri, Sağlık uygulamaları, Mobil sağlık hizmetleri, Evde muayene, 24/7 doktor desteği, Randevu sistemi, Tıbbi destek, Hasta bakımı, Online sağlık kontrolü',
                'home_page_detail' => 'İlaçlarınızı daha hızlı yazdırın, zamanınızı daha verimli kullanın.',
                'category_page_detail' => '',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor" aria-hidden="true" focusable="false" class=""><title>heart_search</title><path d="M0.779 7.414c0-3.233 2.621-5.853 5.853-5.853h4.683c0.646 0 1.17 0.524 1.17 1.17s-0.524 1.17-1.17 1.17h-4.683c-1.94 0-3.513 1.573-3.513 3.513v9.366c0 0.646-0.524 1.17-1.17 1.17s-1.17-0.524-1.17-1.17v-9.366z"></path><path d="M30.051 20.293c0.646 0 1.17 0.524 1.17 1.17v4.683c0 3.233-2.621 5.853-5.853 5.853h-9.366c-0.646 0-1.17-0.524-1.17-1.17s0.524-1.17 1.17-1.17h9.366c1.94 0 3.513-1.573 3.513-3.513v-4.683c0-0.646 0.524-1.17 1.17-1.17z"></path><path d="M22.246 2.341c-2.802 0-5.074 2.272-5.074 5.074s2.272 5.074 5.074 5.074c2.802 0 5.074-2.272 5.074-5.074s-2.272-5.074-5.074-5.074zM14.831 7.414c0-4.095 3.319-7.414 7.414-7.414s7.414 3.32 7.414 7.414-3.319 7.414-7.414 7.414c-4.095 0-7.414-3.319-7.414-7.414z"></path><path d="M25.825 11.001c0.457-0.457 1.198-0.457 1.655 0l3.39 3.391c0.457 0.457 0.457 1.198 0 1.655s-1.198 0.457-1.655 0l-3.39-3.39c-0.457-0.457-0.457-1.198 0-1.655z"></path><path d="M5.4 21.853c-0.604 0-1.182 0.243-1.604 0.675-0.902 0.922-0.903 2.395-0.001 3.317 0 0 0.001 0.001 0.001 0.001l3.302 3.352c0.288 0.295 0.683 0.461 1.095 0.461s0.807-0.166 1.095-0.461l0.003-0.003 3.299-3.35c0-0 0.001-0.001 0.001-0.001 0.901-0.922 0.901-2.396-0.001-3.317-0.422-0.431-1-0.675-1.604-0.675s-1.182 0.243-1.604 0.674l-0.003 0.003-0.353 0.358c-0.22 0.223-0.52 0.349-0.834 0.349s-0.614-0.126-0.834-0.349l-0.356-0.361c-0.422-0.431-1-0.675-1.604-0.675zM14.263 20.891c1.793 1.832 1.793 4.761 0 6.593l-0.003 0.003-3.299 3.35c-0 0-0.001 0.001-0.001 0.002-0.728 0.744-1.726 1.163-2.767 1.163s-2.038-0.419-2.767-1.163c-0-0-0.001-0.001-0.001-0.002l-3.302-3.352c-1.793-1.832-1.793-4.761-0-6.593zM14.263 20.891c-0.862-0.881-2.043-1.378-3.277-1.378-1.016 0-1.997 0.337-2.793 0.949-0.796-0.612-1.777-0.949-2.793-0.949-1.233 0-2.414 0.497-3.277 1.378z"></path></svg>',
                'type' => 'online',
                'sort_order' => '10',
                'is_show_home_page' => true,
                'is_show_service_page' => false,
                'home_page_colspan' => 1,
            ],
            [
                'title' => 'Diyetisyen Görüşmesi',
                'meta_description' => 'Uzman hekim ve tıbbi personelimiz ile profesyonel evde sağlık hizmetleri sunuyoruz.',
                'keywords' => 'Doktorlarımız, Uzman doktorlar, Sağlık uzmanları, Tıp hekimleri, Klinik uzmanlıklar, Sağlık hizmetleri, Hekim profilleri, Doktor randevu, Sağlık danışmanlığı, Online doktor, Tıbbi destek, Hekim rehberi, Farklı branşlar, Hasta bakımı, Doktor bilgileri',
                'home_page_detail' => 'Sağlıklı ve size özel beslenme alışkanlığı kazanmanız için destek olalım.',
                'category_page_detail' => '',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor" aria-hidden="true" focusable="false" class=""><title>salad</title><path d="M16.484 15.443c0.574-5.441 5.039-9.551 10.373-9.551h0.657c1.592 0 2.872 1.314 2.872 2.948v0.674c0 2.527-0.87 4.969-2.462 6.89-0.443 0.522-1.215 0.59-1.74 0.135s-0.575-1.246-0.131-1.786c1.215-1.465 1.887-3.318 1.871-5.239v-0.674c0-0.236-0.181-0.421-0.41-0.421h-0.657c-4.070 0-7.484 3.15-7.928 7.294-0.066 0.691-0.673 1.196-1.362 1.112-0.673-0.067-1.165-0.691-1.083-1.398v0.017z"></path><path d="M18.676 3.264c-1.658-0.977-3.693-0.977-5.334 0-1.658 0.977-2.675 2.779-2.675 4.75 0 0.017 0 0.051 0 0.067v0.236c0 0.505-0.295 0.977-0.755 1.162-0.46 0.202-0.985 0.084-1.346-0.27-1.018-1.044-2.675-1.044-3.693 0s-1.018 2.746 0 3.79l0.689 0.707c0.378 0.387 0.903 0.623 1.444 0.623h10.701c0.673 0 1.231 0.573 1.231 1.263s-0.558 1.263-1.231 1.263h-10.701c-1.198 0-2.347-0.488-3.201-1.364l-0.689-0.707c-1.986-2.038-1.986-5.34 0-7.361 1.428-1.466 3.496-1.87 5.285-1.23 0.476-2.139 1.805-4.009 3.693-5.121 2.413-1.432 5.384-1.432 7.796 0s3.906 4.076 3.906 6.923v0.236c0 0.691-0.558 1.263-1.231 1.263s-1.231-0.573-1.231-1.263v-0.236c0-1.954-1.018-3.773-2.675-4.75l0.016 0.017z"></path><path d="M31.299 15.324c-0.542-0.64-1.346-1.011-2.167-1.011l-25.276 0.893-0.181-1.145-0.968 0.269c-0.377 0.034-0.755 0.118-1.1 0.303h-0.049l-0.066 0.067c-0.279 0.168-0.558 0.371-0.771 0.623-0.049 0.050-0.082 0.101-0.131 0.152-0.46 0.623-0.673 1.398-0.558 2.19 0.607 4.295 3.004 8.069 6.532 10.36v1.028c0 1.634 1.28 2.948 2.872 2.948h13.13c1.592 0 2.872-1.314 2.872-2.948v-1.028c3.545-2.291 5.941-6.064 6.532-10.343 0.115-0.859-0.148-1.718-0.689-2.358h0.017zM23.618 26.205c-0.394 0.219-0.624 0.64-0.624 1.095v1.752c0 0.236-0.181 0.421-0.41 0.421h-13.147c-0.23 0-0.41-0.185-0.41-0.421v-1.752c0-0.455-0.246-0.876-0.624-1.095-3.217-1.853-5.4-5.138-5.942-8.877 0-0.118 0.016-0.253 0.099-0.337 0.082-0.101 0.197-0.152 0.312-0.152h26.245c0.115 0 0.23 0.051 0.312 0.152 0.082 0.084 0.115 0.219 0.099 0.337-0.525 3.739-2.725 7.024-5.942 8.877h0.033z"></path></svg>',
                'type' => 'online',
                'sort_order' => '11',
                'is_show_home_page' => true,
                'is_show_service_page' => false,
                'home_page_colspan' => 1,
            ],
            [
                'title' => 'Evde Yara Bakımı',
                'meta_description' => 'Uzman hekim ve tıbbi personelimiz ile profesyonel evde sağlık hizmetleri sunuyoruz.',
                'keywords' => '',
                'home_page_detail' => 'Yaralarınızın iyileşme sürecini hızlandırmak ve hijyenini sağlamak için evde yara bakımı hizmeti sunuyoruz.',
                'category_page_detail' => 'Yaralarınızın iyileşme sürecini hızlandırmak ve hijyenini sağlamak için evde yara bakımı hizmeti sunuyoruz.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor" aria-hidden="true" focusable="false" class=""><title>xray_bones</title><path d="M12.71 0c0.679 0 1.23 0.551 1.23 1.23v3.571c0 0.761-0.302 1.491-0.844 2.031-0 0-0.001 0.001-0.001 0.001l-1.806 1.806c-0.839 0.839-0.839 2.2 0 3.039s2.2 0.839 3.039 0l0.798-0.798c0.231-0.231 0.544-0.36 0.87-0.36s0.639 0.13 0.87 0.36l0.798 0.798c0.839 0.839 2.2 0.839 3.039 0s0.839-2.2 0-3.039l-1.806-1.806c-0-0-0.001-0.001-0.001-0.001-0.542-0.54-0.842-1.273-0.842-2.031v-3.571c0-0.679 0.551-1.23 1.23-1.23s1.23 0.551 1.23 1.23v3.571c0 0.111 0.044 0.214 0.118 0.288l0.002 0.002 1.809 1.808c1.8 1.8 1.8 4.719 0 6.519-1.776 1.776-4.641 1.8-6.446 0.071-1.805 1.729-4.67 1.705-6.446-0.071-1.8-1.8-1.8-4.719 0-6.519l1.811-1.811c0.077-0.077 0.12-0.18 0.12-0.288v-3.571c0-0.679 0.551-1.23 1.23-1.23z"></path><path d="M6.154 2.461c-2.040 0-3.693 1.653-3.693 3.693v19.693c0 2.040 1.653 3.693 3.693 3.693h19.693c2.040 0 3.693-1.653 3.693-3.693v-19.693c0-2.040-1.653-3.693-3.693-3.693h-19.693zM0 6.154c0-3.399 2.755-6.154 6.154-6.154h19.693c3.399 0 6.154 2.755 6.154 6.154v19.693c0 3.399-2.755 6.153-6.154 6.153h-19.693c-3.399 0-6.154-2.755-6.154-6.153v-19.693z"></path><path d="M14.337 20.321c-0.839-0.839-2.2-0.839-3.039 0s-0.839 2.2 0 3.039l1.806 1.806c0 0 0.001 0.001 0.001 0.001 0.542 0.54 0.842 1.273 0.842 2.031v3.571c0 0.679-0.551 1.23-1.23 1.23s-1.23-0.551-1.23-1.23v-3.571c0-0.111-0.044-0.214-0.118-0.288l-0.002-0.002-1.808-1.809c-1.8-1.8-1.8-4.719 0-6.519 1.776-1.776 4.641-1.8 6.446-0.071 1.805-1.729 4.67-1.705 6.446 0.071 1.8 1.8 1.8 4.719 0 6.519l-1.808 1.809c-0.078 0.078-0.121 0.182-0.121 0.29v3.571c0 0.679-0.551 1.23-1.23 1.23s-1.23-0.551-1.23-1.23v-3.571c0-0.761 0.302-1.491 0.841-2.030l1.809-1.809c0.839-0.839 0.839-2.2 0-3.039s-2.2-0.839-3.039 0l-0.798 0.798c-0.48 0.48-1.259 0.48-1.74 0l-0.798-0.798z"></path></svg>',
                'type' => 'home_office',
                'sort_order' => '12',
                'is_show_home_page' => false,
                'is_show_service_page' => true,
                'home_page_colspan' => 1,
            ],
            [
                'title' => 'Eğitim ve Danışmanlık Hizmetleri',
                'meta_description' => 'Uzman hekim ve tıbbi personelimiz ile profesyonel evde sağlık hizmetleri sunuyoruz.',
                'keywords' => '',
                'home_page_detail' => '',
                'category_page_detail' => 'Hastalık yönetiminden ilk yardıma kadar sağlık konusunda ihtiyacınız olan eğitimleri ve danışmanlıkları bulunduğunuz yerde veriyoruz.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor" aria-hidden="true" focusable="false" class=""><title>xray_bones</title><path d="M12.71 0c0.679 0 1.23 0.551 1.23 1.23v3.571c0 0.761-0.302 1.491-0.844 2.031-0 0-0.001 0.001-0.001 0.001l-1.806 1.806c-0.839 0.839-0.839 2.2 0 3.039s2.2 0.839 3.039 0l0.798-0.798c0.231-0.231 0.544-0.36 0.87-0.36s0.639 0.13 0.87 0.36l0.798 0.798c0.839 0.839 2.2 0.839 3.039 0s0.839-2.2 0-3.039l-1.806-1.806c-0-0-0.001-0.001-0.001-0.001-0.542-0.54-0.842-1.273-0.842-2.031v-3.571c0-0.679 0.551-1.23 1.23-1.23s1.23 0.551 1.23 1.23v3.571c0 0.111 0.044 0.214 0.118 0.288l0.002 0.002 1.809 1.808c1.8 1.8 1.8 4.719 0 6.519-1.776 1.776-4.641 1.8-6.446 0.071-1.805 1.729-4.67 1.705-6.446-0.071-1.8-1.8-1.8-4.719 0-6.519l1.811-1.811c0.077-0.077 0.12-0.18 0.12-0.288v-3.571c0-0.679 0.551-1.23 1.23-1.23z"></path><path d="M6.154 2.461c-2.040 0-3.693 1.653-3.693 3.693v19.693c0 2.040 1.653 3.693 3.693 3.693h19.693c2.040 0 3.693-1.653 3.693-3.693v-19.693c0-2.040-1.653-3.693-3.693-3.693h-19.693zM0 6.154c0-3.399 2.755-6.154 6.154-6.154h19.693c3.399 0 6.154 2.755 6.154 6.154v19.693c0 3.399-2.755 6.153-6.154 6.153h-19.693c-3.399 0-6.154-2.755-6.154-6.153v-19.693z"></path><path d="M14.337 20.321c-0.839-0.839-2.2-0.839-3.039 0s-0.839 2.2 0 3.039l1.806 1.806c0 0 0.001 0.001 0.001 0.001 0.542 0.54 0.842 1.273 0.842 2.031v3.571c0 0.679-0.551 1.23-1.23 1.23s-1.23-0.551-1.23-1.23v-3.571c0-0.111-0.044-0.214-0.118-0.288l-0.002-0.002-1.808-1.809c-1.8-1.8-1.8-4.719 0-6.519 1.776-1.776 4.641-1.8 6.446-0.071 1.805-1.729 4.67-1.705 6.446 0.071 1.8 1.8 1.8 4.719 0 6.519l-1.808 1.809c-0.078 0.078-0.121 0.182-0.121 0.29v3.571c0 0.679-0.551 1.23-1.23 1.23s-1.23-0.551-1.23-1.23v-3.571c0-0.761 0.302-1.491 0.841-2.030l1.809-1.809c0.839-0.839 0.839-2.2 0-3.039s-2.2-0.839-3.039 0l-0.798 0.798c-0.48 0.48-1.259 0.48-1.74 0l-0.798-0.798z"></path></svg>',
                'type' => 'home_office',
                'sort_order' => '13',
                'is_show_home_page' => true,
                'is_show_service_page' => true,
                'home_page_colspan' => 1,
            ],
            [
                'title' => 'Anında Doktor Desteği',
                'meta_description' => 'Uzman hekim ve tıbbi personelimiz ile profesyonel evde sağlık hizmetleri sunuyoruz.',
                'keywords' => 'Doktor kategorileri, Uzman doktorlar, Sağlık uzmanları, Hekim kategorileri, Tıp uzmanlıkları, Medikal uzmanlar, Sağlık hizmetleri, Doktor randevu, Online doktor, Sağlık danışmanlığı, Hekim rehberi, Klinik uzmanlıklar, Hastalıklar ve tedaviler, Aile hekimleri, Özel hastane doktorları',
                'home_page_detail' => 'Sağlığınızla ilgili aklınıza takılan her konuda, online hizmet veren doktorlarımıza danışın.Muayene sonunda SGK onaylı e-reçeteniz ile birlikte!',
                'category_page_detail' => '',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor" aria-hidden="true" focusable="false" class=""><path d="M15.996 17.942c-4.088 0-7.411-3.323-7.411-7.411v-6.241c0-2.372 1.919-4.291 4.291-4.291h6.241c2.372 0 4.291 1.919 4.291 4.291v6.241c0 4.088-3.323 7.411-7.411 7.411zM12.876 2.341c-1.077 0-1.95 0.874-1.95 1.95v6.241c0 2.793 2.278 5.071 5.071 5.071s5.071-2.278 5.071-5.071v-6.241c0-1.077-0.874-1.95-1.95-1.95h-6.241zM20.445 21.655c-0.53 0-0.999-0.359-1.139-0.889l-1.155-4.634c-0.156-0.624 0.218-1.264 0.858-1.42 0.624-0.156 1.264 0.218 1.42 0.858l1.155 4.634c0.156 0.624-0.218 1.264-0.858 1.42-0.094 0.031-0.187 0.031-0.281 0.031zM11.563 21.656c-0.094 0-0.187 0-0.281-0.031-0.624-0.156-1.014-0.796-0.858-1.42l1.155-4.634c0.156-0.624 0.796-0.999 1.42-0.858 0.624 0.156 1.014 0.796 0.858 1.42l-1.155 4.634c-0.125 0.53-0.608 0.889-1.139 0.889zM9.756 27.319c-0.64 0-1.17-0.53-1.17-1.17v-5.991c0-0.64 0.53-1.17 1.17-1.17s1.17 0.53 1.17 1.17v5.991c0 0.64-0.53 1.17-1.17 1.17zM9.756 31.999c-1.935 0-3.51-1.576-3.51-3.51s1.576-3.51 3.51-3.51c1.935 0 3.51 1.576 3.51 3.51s-1.576 3.51-3.51 3.51zM9.756 27.319c-0.64 0-1.17 0.53-1.17 1.17s0.53 1.17 1.17 1.17c0.64 0 1.17-0.53 1.17-1.17s-0.53-1.17-1.17-1.17zM22.248 27.319c-0.64 0-1.17-0.53-1.17-1.17v-5.991c0-0.64 0.53-1.17 1.17-1.17s1.17 0.53 1.17 1.17v5.991c0 0.64-0.53 1.17-1.17 1.17zM19.553 31.999c-0.406 0-0.796-0.203-1.014-0.577-0.39-0.655-0.593-1.389-0.593-2.153 0-2.372 1.919-4.291 4.291-4.291s4.291 1.919 4.291 4.291c0 0.764-0.218 1.513-0.593 2.153-0.328 0.562-1.045 0.749-1.607 0.406-0.562-0.328-0.733-1.045-0.406-1.607 0.172-0.296 0.265-0.64 0.265-0.967 0-1.061-0.874-1.95-1.95-1.95s-1.95 0.874-1.95 1.95c0 0.328 0.094 0.671 0.265 0.967 0.328 0.562 0.14 1.279-0.421 1.607-0.187 0.109-0.39 0.156-0.593 0.156zM22.252 8.582h-12.497c-0.64 0-1.17-0.53-1.17-1.17s0.53-1.17 1.17-1.17h12.482c0.64 0 1.17 0.53 1.17 1.17s-0.53 1.17-1.17 1.17h0.016zM30.056 28.879c-0.64 0-1.17-0.53-1.17-1.17v-2.153c0-1.669-1.186-3.12-2.824-3.448l-4.447-0.889c0 0-0.125 0-0.187 0.031-3.292 2.2-7.567 2.2-10.859 0-0.047-0.031-0.125-0.047-0.187-0.031l-4.447 0.889c-1.638 0.328-2.824 1.779-2.824 3.448v2.153c0 0.64-0.53 1.17-1.17 1.17s-1.17-0.53-1.17-1.17v-2.153c0-2.777 1.981-5.195 4.712-5.742l4.447-0.889c0.671-0.14 1.357 0 1.935 0.39 2.512 1.669 5.757 1.669 8.269 0 0.577-0.374 1.248-0.515 1.935-0.39l4.447 0.889c2.73 0.546 4.712 2.964 4.712 5.742v2.153c0 0.64-0.53 1.17-1.17 1.17z"></path></svg>',
                'type' => 'online',
                'sort_order' => '0',
                'is_show_home_page' => true,
                'is_show_service_page' => false,
                'home_page_colspan' => 1,
            ],
        ];

        foreach ($data as $value) {
            $serviceCategory = new ServiceCategory();
            $serviceCategory->title = $value['title'];
            $serviceCategory->slug = SlugHelper::generateUniqueSlug(ServiceCategory::class, $value['title']);
            $serviceCategory->meta_description = $value['meta_description'];
            $serviceCategory->home_page_detail = $value['home_page_detail'];
            $serviceCategory->category_page_detail = $value['category_page_detail'];
            $serviceCategory->icon = $value['icon'];
            $serviceCategory->type = $value['type'];
            $serviceCategory->sort_order = $value['sort_order'];
            $serviceCategory->is_show_home_page = $value['is_show_home_page'];
            $serviceCategory->is_show_service_page = $value['is_show_service_page'];
            $serviceCategory->home_page_colspan = $value['home_page_colspan'];
            $serviceCategory->save();


            $tagIds = [];
            $tags = explode(',', $value['keywords']);
            if (count($tags) > 0) {
                foreach ($tags as $tagName) {
                    if (strlen($tagName) > 1) {
                        $tag = Tag::firstOrCreate(['name' => $tagName]);
                        $tagIds[] = $tag->id;
                    }
                }
            }
            $serviceCategory->tags()->sync($tagIds);
        }

    }
}
