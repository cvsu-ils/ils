<?php
    $data = array();

    $campuses = array(
        'MAIN' => array(
            'title' => 'Cavite State University - Main Campus Library',
            'building' => array(
                array('label' => 'A. First Floor (1st floor)', 'children' => 
                    array(
                        'Circulation Section',
                        'Online Library Section',
                        'Office of the University Librarian'
                    )
                ),
                array('label' => 'B. Second Floor (2nd floor)', 'children' => 
                    array(
                        'Theses Section',
                        'Filipiniana Section',
                        'Periodicals Section',
                        'Accreditation Section'
                    )
                ),
                array('label' => 'C. Third Floor (3rd floor)', 'children' => 
                    array(
                        'Reference Section',
                        'Reserve Section',
                        'Technical Services Section'
                    )
                ),
                array('label' => 'D. Fourth Floor (4th floor)',
                    'children' => array(
                        array(
                            'label' => 'Multimedia Section',
                            'children' => array(
                                'Internet Services', 'Printing Services'
                            )
                        ),
                        array(
                            'label' => 'Electronic Resources Section',
                            'children' => array(
                                'CD-ROM Collection', 'Wi-Fi Lounge', 'Laptop Area', 'Collaboration Room', 'Learning Commons'
                            )
                        )
                    ),
                ),
                array('label' => 'E. Sixth Floor (6th floor)', 'children' => 
                    array(
                        'Al Fresco Reading Rooms',
                        'University Library Archives Section'
                    )
                )
            ),
            'vision' => '',
            'mission' => '',
            'goals' => array(),
            'objectives' => array(),
            'statistics' => array(
                array('title' => 'Core Collection', 'subtitle' => '', 'count' => '30K'),
                array('title' => 'Book Collection', 'subtitle' => '', 'count' => '26K'),
                array('title' => 'Thesis Collection', 'subtitle' => '', 'count' => '13K'),
                array('title' => 'E-Book Collection', 'subtitle' => '', 'count' => '5,100'),
                array('title' => 'E-Journal Collection', 'subtitle' => 'Titles', 'count' => '1,873'),
                array('title' => 'CD-ROM Collection', 'subtitle' => '', 'count' => '954')
            ),
            'gallery' => array(
                'storage/images/facilities/main/main-1.jpg',
                'storage/images/facilities/main/main-2.jpg',
                'storage/images/facilities/main/main-3.jpg',
                'storage/images/facilities/main/main-4.jpg',
                'storage/images/facilities/main/main-5.jpg',
                'storage/images/facilities/main/main-6.jpg'
            ),
            'links' => array(
                'address' => array('title' => 'Indang, Cavite, Philippines', 'link' => 'https://www.google.com/maps?ll=14.197816,120.88149&z=13&t=m&hl=en-US&gl=US&mapclient=embed&cid=7513687788570292424'),
                'facebook' => array('title' => 'Cavite State University - Main Campus Library', 'link' => 'https://www.facebook.com/cvsulibrary'),
                'aboutsite' => array('title' => 'About CvSU - Main City Library', 'link' => 'https://cvsu.edu.ph/2018/01/13/library'),
                'website' => array('title' => 'CvSU - Integrated Library System (ILS)', 'link' => 'http://library.cvsu.edu.ph/landing/'),
                'webopac' => array('title' => 'CvSU E-Library (Web OPAC)', 'link' => 'http://library.cvsu.edu.ph/'),
                'youtube' => array('title' => 'CvSU Main Library', 'link' => 'https://www.youtube.com/channel/UC1dyBQ2aFGHvSD95n5R2IuQ'),
                'eaccession' => array('title' => 'CvSU Library E-Accession Record', 'link' => 'https://bit.ly/CvsuLibraryAccession'),
                'brochure' => array('title' => 'Online Library Brochure', 'link' => 'https://bit.ly/CvSULibraryBrochure'),
                'virtualtour' => array('title' => 'Virtual Library Tour of the University Library', 'link' => 'https://bit.ly/CvsuLibraryTour')
            ),
            'others' => array(
                'facebook' => array('title' => 'Cavite State University - Main Campus Library', 'link' => 'https://www.facebook.com/cvsulibrary'),
                'googlemaps' => array('title' => 'Cavite State University - Bacoor Campus', 'link' => 'https://maps.google.com/maps?q=Cavite%20State%20University%20-%20Main&t=&z=13&ie=UTF8&iwloc=&output=embed')
            ),
            'email' => 'cvsulibrary@cvsu.edu.ph'
        ),
        'BACOORCITY' => array(
            'title' => 'Cavite State University - Bacoor City Campus Library',
            'overview' => array(
                'The Bacoor City Campus Library is located at the Second Floor of the Cavite State University – Bacoor City Campus, Phase 2, Soldiers Hills IV, Molino VI, Bacoor City, Cavite.'),
            'vision' => '“To promote the humble existence and importance of library in an institution and to its community through quality education where can develop and produce morally upright and competitive individuals.”',
            'mission' => '“To support the institution’s mission in its commitment that can produce individuals with truth, excellence, and service in any phases and trends of life.”',
            'goals' => array('To provide a conducive place where clientele can stay and study quietly;', 'To respond to the students’ multitude of academic needs;', 'To develop and improve CvSU Bacoor City Campus Library’s collection such as books, serials, non-print materials; and', 'To continually assess the needs and competence of the library management and its resources.'),
            'objectives' => array('Develop an adequate and relevant collection of material resources, books, periodicals, and non-book materials appropriate to each level of the instructional program and to the needs of research;', 'Expand a broad reference collection which underscores Filipiniana, and research resources as functional tools of scholarship;', 'Develop innovative approaches for the effective use of the above collections in support of the needs, interests and concerns of the library;', 'Provide library orientation sessions for the freshmen classes, as well as to give library tour on request', 'Provide adequate physical facilities and equipment that will make possible the most effective use of the library and library materials.'),
            'personnels' => array(
                array('avatar' => 'storage/images/personnels/bacoor-city/lorema-n-acapulco.jpg', 'name' => 'Lorema N. Acapulco, RL', 'position' => 'Campus Librarian'),
                array('avatar' => 'storage/images/personnels/bacoor-city/russel-c-cacho.jpg', 'name' => 'Russel C. Cacho', 'position' => 'Library Assistant')
            ),
            'statistics' => array(
                array('title' => 'Core Collection', 'subtitle' => '', 'count' => '3,547'),
                array('title' => 'Book Collection', 'subtitle' => '', 'count' => '1,574'),
                array('title' => 'Thesis Collection', 'subtitle' => '', 'count' => '551'),
                array('title' => 'E-Book Collection', 'subtitle' => '', 'count' => '1,422')
            ),
            'gallery' => array(
                'storage/images/facilities/bacoor-city/bacoor-city-1.jpg',
                'storage/images/facilities/bacoor-city/bacoor-city-2.jpg',
                'storage/images/facilities/bacoor-city/bacoor-city-3.jpg',
                'storage/images/facilities/bacoor-city/bacoor-city-4.jpg',
                'storage/images/facilities/bacoor-city/bacoor-city-5.jpg',
                'storage/images/facilities/bacoor-city/bacoor-city-6.jpg',
                'storage/images/facilities/bacoor-city/bacoor-city-7.jpg',
                'storage/images/facilities/bacoor-city/bacoor-city-8.jpg',
                'storage/images/facilities/bacoor-city/bacoor-city-9.jpg'
            ),
            'links' => array(
                'address' => array('title' => 'CX7J+4G5, Sampaguita, Bacoor, Cavite, Philippines', 'link' => 'https://www.google.com/maps?ll=14.412771,120.981349&z=19&t=h&hl=en-US&gl=US&mapclient=embed&cid=12613929739887301784'),
                'facebook' => array('title' => 'Cavite State University-Bacoor City Campus Library', 'link' => 'https://www.facebook.com/CvSUBacoorCityCampusLibrary/'),
                'aboutsite' => array(),
                'website' => array('title' => 'CvSU - Bacoor City Library Website', 'link' => 'https://cvsubacoorcitycampuslibrary.wordpress.com/'),
                'webopac' => array('title' => 'Web OPAC', 'link' => 'https://cvsubccl.librarika.com/')
            ),
            'others' => array(
                'facebook' => array('title' => 'Cavite State University-Bacoor City Campus Library', 'link' => 'https://www.facebook.com/CvSUBacoorCityCampusLibrary/'),
                'googlemaps' => array('title' => 'Cavite State University - Bacoor Campus', 'link' => 'https://maps.google.com/maps?q=cavite%20state%20university%20-%20bacoor%20campus&t=k&z=19&ie=UTF8&iwloc=&output=embed')
            ),
            'email' => 'cvsubacoorlibrary@cvsu.edu.ph'
            //, 'cvsubacoor.libraryservices@cvsu.edu.ph'
        ),
        'CCAT' => array(
            'title' => 'Cavite State University - CCAT Campus Library',
            'overview' => array(
                'The College Library, from the time of the establishment of the Cavite College of Arts and Trades on August 8, 1970 up to the middle part of 1973 was located in one of the building.  Its collection which consisted of only 300 technical books was not properly organized.  The Supply Officer acted as the librarian.  In 1973, more courses were offered and enrolment increased so the library was transferred to the second floor of the Administration Building, this time under a professional librarian, Miss Elvira Tamio.  From 1973 to 1982, the library had accumulated a total of 1,250 volumes of books to include few pamphlets and other materials.',
                'On October 1, 1982,  Miss Tamio was appointed registrar.  Miss Nenita T. Nieva, a former elementary school teacher then assumed librarianship.  In the latter part of 1983, Miss Luzviminda G. Molina, now Mrs. Luzviinda M. Bartolome joined the staff as school librarian.',
                'As chief librarian, Miss Nieva gave priority on collection development by acquiring and purchasing books and periodicals much more with the assistance of the Instructional Improvement Fund (IIF) of the CCAT Parents and Teachers Association. Additions to the collection were also made possible through the book donations from The Asia Foundation.',
                'When Miss Nieva was promoted registrar in 1992, Mrs.  Bartolome assumed her position as college librarian.  She is ably assisted by Miss Celia Gabriel, another professional librarian.  Later, Miss Gabriel resigned and in the middle part of 1999, Mrs. Ma. Marilyn  M. Villena, a former BSIE graduate of this college, was hired as  school librarian up to April 2008.',
                'Last July 2008, the college library was transferred to its new site, at the right wing of the Department of Arts and Sciences Building. Continuous acquisitions of latest books, periodicals and other library resources are being done to improve and update the collections. An internet and wifi access becomes available to support the present collection. The library is well lighted and ventilated.',
                'From 1992 to January 2019 CvSU-CCAT Campus Library was managed by Mrs. Luzviminda M. Bartolome, and after her retirement, Ms. Dan Marie F. Navarrete was designated as a Campus Librarian from February 2019 up to present.',
                'At present, the Library is manned by two professional librarians and three support staff.'),
            'vision' => 'The CvSU-CCAT Campus Library: For self-sufficient learning through efficient and effective services of learning resources that encourage learners to be competitive and upright.',
            'mission' => 'The CvSU-CCAT Campus Library shall provide quality and relevant learning resources to support curricular and co-curricular programs in their instructional, research, and recreational needs that enhance learners’ development in becoming professional, skilled, and morally upright individuals for global competitiveness.',
            'goals' => array('Shall provide accessible, relevant, and up-to-date library collections.', 'Develop innovative quality library services to cater the needs of the clienteles.', 'Strengthen strategic linkages and collaborative partnerships among local and international institutions to address the changing needs of the stakeholders.'),
            'objectives' => array('Acquire accessible, relevant, and up-to-date library collections continuously.', 'Utilize appropriate technology to improve library operations and services.', 'Establish stronger connections with varied library consortia to promote cooperation and greater access in terms of facilities, resources, services, and exchange of publications.'),
            'personnels' => array(
                array('avatar' => 'storage/images/personnels/ccat/dan-marie-f-navarrete.png', 'name' => 'Dan Marie F. Navarrete, RL, MLIS', 'position' => 'Campus Librarian'),
                array('avatar' => 'storage/images/personnels/ccat/kathy-a-padre.png', 'name' => 'Kathy A. Padre, RL', 'position' => 'Assistant Campus Librarian'),
                array('avatar' => 'storage/images/personnels/ccat/sharon-p-pillos.png', 'name' => 'Sharon S. Pillos', 'position' => 'Library Assistant'),
                array('avatar' => 'storage/images/personnels/ccat/judith-b-labrador.png', 'name' => 'Judith B. Labrador', 'position' => 'Library Assistant'),
                array('avatar' => 'storage/images/personnels/ccat/ronnel-s-araracap.png', 'name' => 'Ronnel S. Araracap', 'position' => 'Library Assistant')
            ),
            'statistics' => array(
                array('title' => 'Core Collection', 'subtitle' => '', 'count' => '19,081'),
                array('title' => 'Book Collection', 'subtitle' => 'Volumes', 'count' => '12,569'),
                array('title' => 'Thesis Collection', 'subtitle' => 'Titles', 'count' => '5,232'),
                array('title' => 'E-Book Collection', 'subtitle' => 'Titles', 'count' => '1,280')
            ),
            'gallery' => array(
                'storage/images/facilities/ccat/ccat-1.jpg',
                'storage/images/facilities/ccat/ccat-2.jpg',
                'storage/images/facilities/ccat/ccat-3.jpg',
                'storage/images/facilities/ccat/ccat-4.jpg',
                'storage/images/facilities/ccat/ccat-5.jpg',
                'storage/images/facilities/ccat/ccat-6.jpg',
                'storage/images/facilities/ccat/ccat-7.jpg'
            ),
            'links' => array(
                'address' => array('title' => 'CV38+C99, Rosario, Cavite, Philippines', 'link' => 'https://www.google.com/maps?ll=14.403545,120.865979&z=19&t=h&hl=en-US&gl=US&mapclient=embed&cid=5281155602060050161'),
                'facebook' => array('title' => 'Cavite State University - CCAT Campus Library', 'link' => 'https://www.facebook.com/CvSUCCATCampusLibrary.edu.ph/'),
                'aboutsite' => array(),
                'website' => array('title' => 'CvSU - CCAT Library Website', 'link' => 'https://cvsu-rosario.edu.ph/library-2/'),
                'webopac' => array('title' => 'Web OPAC', 'link' => 'http://library.cvsu-rosario.edu.ph/')
            ),
            'others' => array(
                'facebook' => array('title' => 'Cavite State University - CCAT Campus Library', 'link' => 'https://www.facebook.com/CvSUCCATCampusLibrary.edu.ph/'),
                'googlemaps' => array('title' => 'Cavite State University - CCAT Campus Library', 'link' => 'https://maps.google.com/maps?q=cavite%20state%20university%20-%20ccat%20campus&t=k&z=19&ie=UTF8&iwloc=&output=embed')
            ),
            'email' => 'libraryccat@cvsu.edu.ph'
        ),
        'CARMONA' => array(
            'title' => 'Cavite State University - Carmona Campus Library',
            'overview' => array(),
            'vision' => '',
            'mission' => '',
            'goals' => array('To improve the Campus access to information and provide assistance, instruction, and gradually innovate library services thru the power of information technology, and secure the resources and services to meet goals and objectives of the University.'),
            'objectives' => array('Improve and strengthen the library collection by providing adequate and updated books, general references, journals/magazines, and electronic resources that will support the campus curricula and clienteles’ research needs.', 'Market the use of library services and its collection.', 'Coordinate with the Campus Library Committee and instructors for assessment and evaluation of library resources to support the instruction and research needs.', 'Gradually adopt innovative technologies in the library.'),
            'personnels' => array(
                array('avatar' => null, 'name' => 'Carl Anthony B. Alora, RL, MLIS', 'position' => 'Campus Librarian'),
                array('avatar' => null, 'name' => 'Brendalyn O. Guinoban', 'position' => 'Library Assistant')
            ),
            'statistics' => array(
                array('title' => 'Core Collection', 'subtitle' => '', 'count' => '7,728'),
                array('title' => 'Book Collection', 'subtitle' => '', 'count' => '3,843'),
                array('title' => 'Thesis Collection', 'subtitle' => '', 'count' => '513'),
                array('title' => 'E-Book Collection', 'subtitle' => '', 'count' => '2,278')
            ),
            'gallery' => array(
                'storage/images/facilities/carmona/carmona-1.jpg',
                'storage/images/facilities/carmona/carmona-2.jpg',
                'storage/images/facilities/carmona/carmona-3.jpg',
                'storage/images/facilities/carmona/carmona-4.jpg',
                'storage/images/facilities/carmona/carmona-5.jpg',
                'storage/images/facilities/carmona/carmona-6.jpg'
            ),
            'links' => array(
                'address' => array('title' => '8387+QVP, Maduya, Carmona, Cavite, Philippines', 'link' => 'https://www.google.com/maps?ll=14.316973,121.064699&z=19&t=h&hl=en-US&gl=US&mapclient=embed&cid=10061956140991413056'),
                'facebook' => array('title' => 'Cavite State University - Carmona Library', 'link' => 'https://www.facebook.com/cvsucarmonalibrary'),
                'aboutsite' => array(),
                'website' => array(),
                'webopac' => array()
            ),
            'others' => array(
                'facebook' => array('title' => 'Cavite State University - Carmona Library', 'link' => 'https://www.facebook.com/cvsucarmonalibrary'),
                'googlemaps' => array('title' => 'Cavite State University - Carmona', 'link' => 'https://maps.google.com/maps?q=cavite%20state%20university%20-%20carmona%20&t=k&z=19&ie=UTF8&iwloc=&output=embed')
            ),
            'email' => 'carmonalibrary@cvsu.edu.ph'
        ),
        'CAVITECITY' => array(
            'title' => 'Cavite State University - Cavite City Campus Library',
            'overview' => array(),
            'vision' => '',
            'mission' => '',
            'goals' => array(),
            'objectives' => array(),
            'personnels' => array(
                array('avatar' => 'storage/images/personnels/cavite-city/marcela-lean-m-espiritu.jpg', 'name' => 'Marcela Lean M. Espiritu, RL, Maed-LIS', 'position' => 'Campus Librarian'),
                array('avatar' => 'storage/images/personnels/cavite-city/editha-a-saria.jpg', 'name' => 'Editha A. Saria', 'position' => 'Library Assistant')
            ),
            'statistics' => array(
                array('title' => 'Core Collection', 'subtitle' => '', 'count' => '8,383'),
                array('title' => 'Book Collection', 'subtitle' => '', 'count' => '6,865'),
                array('title' => 'Fiction Books', 'subtitle' => '', 'count' => '397'),
                array('title' => 'Thesis Collection', 'subtitle' => '', 'count' => '1,518')
            ),
            'gallery' => array(
                'storage/images/facilities/cavite-city/cavite-city-1.jpg',
                'storage/images/facilities/cavite-city/cavite-city-3.jpg',
                'storage/images/facilities/cavite-city/cavite-city-2.jpg'
            ),
            'links' => array(
                'address' => array('title' => 'FV5J+C37, Dalahican, Cavite City, Cavite, Philippines', 'link' => 'https://www.google.com/maps?ll=14.458531,120.880183&z=13&t=m&hl=en-US&gl=US&mapclient=embed&cid=3161368166448437348'),
                'facebook' => array('title' => 'Cavite State University - Cavite City Library', 'link' => 'https://www.facebook.com/Cavite-State-University-Cavite-City-Library-101780288928405/'),
                'aboutsite' => array(),
                'website' => array(),
                'webopac' => array()
            ),
            'others' => array(
                'facebook' => array('title' => 'Cavite State University - Cavite City Library', 'link' => 'https://www.facebook.com/Cavite-State-University-Cavite-City-Library-101780288928405/'),
                'googlemaps' => array('title' => 'Cavite State University - Carmona', 'link' => 'https://maps.google.com/maps?q=Cavite%20State%20University%20-%20Cavite%20city&t=&z=13&ie=UTF8&iwloc=&output=embed')
            ),
            'email' => 'cvsucavitecitylibrary@cvsu.edu.ph'
        ),
        'GENERALTRIASCITY' => array(
            'title' => 'Cavite State University - General Trias City Campus Library',
            'overview' => array('The CvSU General Trias City Campus Library is located on the 4th floor of the Cavite State University – General Trias City Campus. This library aims to provide excellent, equitable, and relevant library services and resources in support of the University’s mission, vision, goals, and objectives.'),
            'vision' => '',
            'mission' => '',
            'goals' => array(),
            'objectives' => array(),
            'personnels' => array(
                array('avatar' => 'storage/images/personnels/general-trias-city/pauline-anne-p-estrada.jpg', 'name' => 'Pauline Anne P. Estrada, RL', 'position' => 'Campus Librarian')),
            'statistics' => array(),
            'gallery' => array(
                'storage/images/facilities/general-trias-city/general-trias-city-1.jpg',
                'storage/images/facilities/general-trias-city/general-trias-city-2.jpg',
                'storage/images/facilities/general-trias-city/general-trias-city-3.jpg',
                'storage/images/facilities/general-trias-city/general-trias-city-4.jpg',
                'storage/images/facilities/general-trias-city/general-trias-city-5.jpg',
                'storage/images/facilities/general-trias-city/general-trias-city-6.jpg',
            ),
            'links' => array(
                'address' => array('title' => '007 Arnaldo, General Trias, 4107 Cavite, Philippines', 'link' => 'https://www.google.com/maps?ll=14.384988,120.880504&z=13&t=m&hl=en-US&gl=US&mapclient=embed&cid=14007862741619548784'),
                'facebook' => array('title' => 'Cavite State University - General Trias Campus Library', 'link' => 'https://www.facebook.com/cvsugeneraltriaslibrary/'),
                'aboutsite' => array(),
                'website' => array(),
                'webopac' => array()
            ),
            'others' => array(
                'facebook' => array('title' => 'Cavite State University - General Trias Campus Library', 'link' => 'https://www.facebook.com/cvsugeneraltriaslibrary/'),
                'googlemaps' => array('title' => 'Cavite State University - Carmona', 'link' => 'https://maps.google.com/maps?q=Cavite%20State%20University%20-%20General%20Trias%20Campus&t=&z=13&ie=UTF8&iwloc=&output=embed')
            ),
            'email' => 'cvsugentriaslibrary@cvsu.edu.ph'
        ),
        'IMUS' => array(
            'title' => 'Cavite State University - Imus Campus Library',
            'overview' => array(
                'CvSU– Imus Campus LIBRARY is a unit that supports the university in carrying out its mission, goals and objectives. It contributes to the realization of the educational goals of CvSU– Imus Campus by acquiring books and other library materials and making them available to the users for research and reference.'),
            'vision' => '',
            'mission' => '',
            'goals' => array(),
            'objectives' => array(),
            'personnels' => array(
                array('avatar' => 'storage/images/personnels/imus-city/marvie-joy-r-sostino.jpg', 'name' => 'Marvie Joy R. Sostino, RL', 'position' => 'Campus Librarian'),
                array('avatar' => 'storage/images/personnels/imus-city/maria-teresa-r-malayao.jpg', 'name' => 'Maria Teresa R. Malayao', 'position' => 'Library Assistant'),
                array('avatar' => 'storage/images/personnels/imus-city/jonathan-a-diño.jpg', 'name' => 'Jonathan A. Diño', 'position' => 'Library Assistant')
            ),
            'statistics' => array(
                array('title' => 'Core Collection', 'subtitle' => 'Volumes', 'count' => '6,496'),
                array('title' => 'Thesis Collection', 'subtitle' => 'Volumes', 'count' => '1,285'),
                array('title' => 'Non-Print', 'subtitle' => 'Volumes', 'count' => '11')
            ),
            'gallery' => array(
                'storage/images/facilities/imus/imus-1.jpg',
                'storage/images/facilities/imus/imus-2.jpg',
                'storage/images/facilities/imus/imus-3.jpg',
                'storage/images/facilities/imus/imus-4.jpg',
                'storage/images/facilities/imus/imus-5.jpg',
                'storage/images/facilities/imus/imus-6.jpg',
                'storage/images/facilities/imus/imus-7.jpg',
                // 'storage/images/facilities/imus/imus-8.jpg',
                'storage/images/facilities/imus/imus-9.jpg',
                'storage/images/facilities/imus/imus-10.jpg'
            ),
            'links' => array(
                'address' => array('title' => 'LTO Compound, Palico 4, Imus City, Cavite, Philippines', 'link' => 'https://www.google.com/maps?ll=14.42846,120.946971&z=13&t=m&hl=en-US&gl=US&mapclient=embed&cid=14049085126836561303'),
                'facebook' => array('title' => 'Imus Campus Library - Cavite State University', 'link' => 'https://www.facebook.com/Imus-Campus-Library-Cavite-State-University-106571451683572/'),
                'aboutsite' => array('title' => 'About CvSU - Imus Library', 'link' => 'https://cvsu-imus.edu.ph/administration/admin-offices?info=201554be061135941013382057'),
                'website' => array('title' => 'CvSU - Imus Library Website', 'link' => 'https://sites.google.com/cvsu.edu.ph/imuscampuslibrary/home'),
                'webopac' => array()
            ),
            'others' => array(
                'facebook' => array('title' => 'Imus Campus Library - Cavite State University', 'link' => 'https://www.facebook.com/Imus-Campus-Library-Cavite-State-University-106571451683572/'),
                'googlemaps' => array('title' => 'Cavite State University - Imus Campus', 'link' => 'https://maps.google.com/maps?q=Cavite%20State%20University%20-%20Imus%20Campus&t=&z=13&ie=UTF8&iwloc=&output=embed')
            ),
            'email' => 'cvsuimuslibrary@cvsu.edu.ph'
        ),
        'NAIC' => array(
            'title' => 'Cavite State University - Naic Campus Library',
            'overview' => array(
                'Libraries are source of entertainment and education for youngsters as well as adults. A library not only helps to inculcate the habit of reading but also inculcates a thirst for knowledge, which makes a person humble and open to new ideas throughout his/her life. Thus, our library continues to develop, maintain and integrate information resources, services and facilities and keep abreast with the functions/activities of the institution while constantly adjusting to meet the changing needs of the community.',
                'The Campus Library is located at the right wing of the campus and it is parallel to other facilities. It is conveniently accessible to students and faculty.    It holds a collection of books, journals, and audio-visual materials sufficient to support the instructional, curricular and research programs of the institution.',
                'The Library adopts the Open Shelves System wherein students can access books and other references much easier. Books are arranged according to the Library of Congress Classification System.'),
            'vision' => '',
            'mission' => '',
            'goals' => array(),
            'objectives' => array(),
            'personnels' => array(
                array('avatar' => 'storage/images/personnels/naic/rien-rose-salvador.jpg', 'name' => 'Rien Rose V. Salvador, RL, MLIS', 'position' => 'Campus Librarian'),
                array('avatar' => 'storage/images/personnels/naic/kristine-m-mojica.jpg', 'name' => 'Kristine M. Mojica, RL, MLIS', 'position' => 'Assistant Campus Librarian')
            ),
            'statistics' => array(
                array('title' => 'Core Collection', 'subtitle' => 'Titles', 'count' => '6,496'),
                array('title' => 'Core Collection', 'subtitle' => 'Volumes', 'count' => '7,694'),
                array('title' => 'Book Collection', 'subtitle' => 'Titles', 'count' => '4,020'),
                array('title' => 'Book Collection', 'subtitle' => 'Volumes', 'count' => '5,982'),
                array('title' => 'Thesis Collection', 'subtitle' => '', 'count' => '1,712')
            ),
            'gallery' => array(
                'storage/images/facilities/naic/naic-2.jpg',
                'storage/images/facilities/naic/naic-3.jpg',
                'storage/images/facilities/naic/naic-4.jpg',
                'storage/images/facilities/naic/naic-1.jpg',
                'storage/images/facilities/naic/naic-6.jpg',
                'storage/images/facilities/naic/naic-5.jpg',
                'storage/images/facilities/naic/naic-7.jpg',
                'storage/images/facilities/naic/naic-8.jpg',
                'storage/images/facilities/naic/naic-9.jpg',
            ),
            'links' => array(
                'address' => array('title' => 'Bucana Malaki, Naic, 4110 Cavite, Philippines', 'link' => 'https://www.google.com/maps?ll=14.322695,120.753936&z=19&t=h&hl=en-US&gl=US&mapclient=embed&cid=568017643629344482'),
                'facebook' => array('title' => 'Cavite State University - Naic Library', 'link' => 'https://www.facebook.com/cvsunaiclibrary/'),
                'aboutsite' => array(),
                'website' => array('title' => 'CvSU - Naic Library Website', 'link' => 'https://www.cvsu-naic.edu.ph/index.php/library/'),
                'webopac' => array()
            ),
            'others' => array(
                'facebook' => array('title' => 'Cavite State University - Naic Library', 'link' => 'https://www.facebook.com/cvsunaiclibrary/'),
                'googlemaps' => array('title' => 'Cavite State University - Naic Campus', 'link' => 'https://maps.google.com/maps?q=cavite%20state%20university%20-%20naic%20campus&t=k&z=19&ie=UTF8&iwloc=&output=embed')
            ),
            'email' => 'library@cvsu-naic.edu.ph'
        ),
        'SILANG' => array(
            'title' => 'Cavite State University - Silang Campus Library',
            'overview' => array(
                'The campus library of Cavite State University – Silang, started from its humble beginnings in a single-room in front of the faculty room of the CvSU-Silang old building located in J.P. Rizal St. Poblacion 2, Silang, Cavite.  Stepping forward to achieve his goal this second semester, Dr. Julio G. Alava, the campus dean, established the school mini-library for the research and reading needs of the students.  The library was established December 13, 2007. The mini-library is the answer of the administrator to the impending needs of the students for references and materials that are related to their subjects.  The books were facilitated by the CvSU-Main campus library to CvSU-Silang through Mrs. Leonita Costa, university chief librarian.  Course related books include reading materials in Business Management, Tourism, Computer Science and, in Hotel and Restaurant Management.  Encyclopedias, dictionaries, and cook books were also included.', 'Cavite State University – Silang transferred to its permanent abode in July 1, 2010 so as the campus library that occupied room 313 of building 3 of the campus. The library was temporarily managed by a full-time faculty Mrs. Abuton, which happened to have a background in library science. On May 18, 2015, Prudencio Rosales, Jr. a licensed librarian was hired to manage the operations of the library. The library furniture were re-arranged to shelve the books and journals properly. Additional books, journals, long tables, and desktop computers were acquired and Library of Congress Classification System was adopted to classify the books collections.', 'On June 7, 2018, the library was transferred to its current location, the second floor of building 3 occupying rooms 324 and 325 to address the increasing needs of the library clientele in space, collections and facilities.  Additional books, journals and desktop computers with internet connections, library counter, carrels, map stand and many others were acquired to provide better library services. Air- condition units were installed to maintain a conducive to learning environment.'),
            'vision' => '',
            'mission' => '',
            'goals' => array(),
            'objectives' => array(),
            'personnels' => array(
                array('avatar' => null, 'name' => 'Prudencio P. Rosales Jr., RL', 'position' => 'Campus Librarian')
            ),
            'statistics' => array(
                array('title' => 'Core Collection', 'subtitle' => '', 'count' => '3,144'),
                array('title' => 'Book Collection', 'subtitle' => '', 'count' => '2,770'),
                array('title' => 'Thesis Collection', 'subtitle' => '', 'count' => '672'),
                array('title' => 'E-Book Collection', 'subtitle' => '', 'count' => '102')
            ),
            'gallery' => array(
                'storage/images/facilities/silang/silang-1.jpg',
                'storage/images/facilities/silang/silang-2.jpg',
                'storage/images/facilities/silang/silang-3.jpg'
            ),
            'links' => array(
                'address' => array('title' => 'J Rizal, Silang, Cavite, Philippines', 'link' => 'https://www.google.com/maps?ll=14.240676,120.979067&z=13&t=m&hl=en-US&gl=US&mapclient=embed&cid=17463832420403768187'),
                'facebook' => array('title' => 'Cavite State University - Silang Library', 'link' => 'https://www.facebook.com/Cavite-State-University-Silang-LIbrary-531079054082800/'),
                'aboutsite' => array(),
                'website' => array(),
                'webopac' => array()
            ),
            'others' => array(
                'facebook' => array('title' => 'Cavite State University - Silang Library', 'link' => 'https://www.facebook.com/Cavite-State-University-Silang-LIbrary-531079054082800/'),
                'googlemaps' => array('title' => 'Cavite State University - Silang Campus', 'link' => 'https://maps.google.com/maps?q=Cavite%20State%20University%20-%20Silang&t=&z=13&ie=UTF8&iwloc=&output=embed')
            ),
            'email' => 'cvsusilanglibrary@cvsu.edu.ph'
        ),
        'TANZA' => array(
            'title' => 'Cavite State University - Tanza Campus Library',
            'overview' => array(),
            'vision' => '',
            'mission' => '',
            'goals' => array(),
            'objectives' => array(),
            'personnels' => array(
                array('avatar' => 'storage/images/personnels/tanza/Roselyn-c-baltar.jpg', 'name' => 'Roselyn Cea Baltar, RL', 'position' => 'Campus Librarian'),
                array('avatar' => 'storage/images/personnels/tanza/Mariechelle-r-correo.jpg', 'name' => 'Mariechelle R. Correo', 'position' => 'Library Assistant')
            ),
            'statistics' => array(
                array('title' => 'Core Collection', 'subtitle' => '', 'count' => '1,720'),
                array('title' => 'Circulation', 'subtitle' => '', 'count' => '1,378'),
                array('title' => 'Filipiniana', 'subtitle' => '', 'count' => '342'),
                array('title' => 'Thesis Collection', 'subtitle' => '', 'count' => '317'),
                array('title' => 'E-Book Collection', 'subtitle' => '', 'count' => '127')
            ),
            'gallery' => array(
                'storage/images/facilities/tanza/tanza-1.jpg',
                'storage/images/facilities/tanza/tanza-2.jpg'
            ),
            'links' => array(
                'address' => array('title' => 'Phase 2, Bahay Katuparan Subdivision, Tanza, Cavite, Philippines', 'link' => 'https://www.google.com/maps?ll=14.333251,120.850149&z=13&t=m&hl=en-US&gl=US&mapclient=embed&cid=5215149568903383579'),
                'facebook' => array(),
                'aboutsite' => array(),
                'website' => array(),
                'webopac' => array()
            ),
            'others' => array(
                'facebook' => array(),
                'googlemaps' => array('title' => 'Cavite State University - Tanza Campus', 'link' => 'https://maps.google.com/maps?q=Cavite%20State%20University%20-%20Tanza%20&t=&z=13&ie=UTF8&iwloc=&output=embed')
            ),
            'email' => 'cvsutanzalibrary@cvsu.edu.ph'
        ),
        'TRECEMARTIRESCITY' => array(
            'title' => 'Cavite State University - Trece Martires City Campus Library',
            'overview' => array('The Trece Martires City Campus Library is located at the Ground Floor of the Cavite State University – Trece Martires City Campus. The Campus Library is one of the branches of the Ladislao N. Diwa Memorial Library of the Cavite State University Main Campus.'),
            'vision' => '',
            'mission' => '',
            'goals' => array(),
            'objectives' => array(),
            'personnels' => array(
                array('avatar' => 'storage/images/personnels/trece-martires-city/loran-camille-v-sara.jpg', 'name' => 'Loran Camille V. Sara, RL', 'position' => 'Campus Librarian'),
                array('avatar' => 'storage/images/personnels/trece-martires-city/angelica-t-erce-ollano.jpg', 'name' => 'Angelica T. Erce-Ollano', 'position' => 'Library Assistant')
            ),
            'statistics' => array(
                array('title' => 'Core Collection', 'subtitle' => '', 'count' => '2,494'),
                array('title' => 'Book Collection', 'subtitle' => '', 'count' => '2,056'),
                array('title' => 'Thesis Collection', 'subtitle' => '', 'count' => '724'),
                array('title' => 'E-Book Collection', 'subtitle' => '', 'count' => '165')
            ),
            'gallery' => array(
                'storage/images/facilities/trece-martires-city/trece-martires-city-1.jpg',
                'storage/images/facilities/trece-martires-city/trece-martires-city-2.jpg',
                'storage/images/facilities/trece-martires-city/trece-martires-city-3.jpg'
            ),
            'links' => array(
                'address' => array('title' => '7VMG+8CF, Barangay Osorio, Trece Martires, Cavite, Philippines', 'link' => 'https://www.google.com/maps?ll=14.283306,120.876052&z=13&t=m&hl=en-US&gl=US&mapclient=embed&cid=11827716296074378472'),
                'facebook' => array('title' => 'Cavite State University - Trece Martires City Campus Library', 'link' => 'https://www.facebook.com/cvsutrececampuslibrary/'),
                'aboutsite' => array('title' => 'About CvSU - Trece Martires City Library', 'link' => 'https://cvsu-trececampus.com/instruction/campus-library'),
                'website' => array(),
                'webopac' => array()
            ),
            'others' => array(
                'facebook' => array('title' => 'Cavite State University - Trece Martires City Campus Library', 'link' => 'https://www.facebook.com/cvsutrececampuslibrary/'),
                'googlemaps' => array('title' => 'Cavite State University - Tanza Campus', 'link' => 'https://maps.google.com/maps?q=Cavite%20State%20University%20-%20Trece&t=&z=13&ie=UTF8&iwloc=&output=embed')
            ),
            'email' => 'cvsutrecelibrary@cvsu.edu.ph'
        )
    );
    $data = $campuses[$code];
?>
<div class="container p-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="p-3 rounded text-uppercase ils-bg-green text-white text-center"><?php echo $data['title'];?></h2>
            <!-- QUICK LINKS -->
            <a href="<?php echo $data['links']['address']['link'];?>" target="_blank"><small class="text-center text-uppercase mr-4"><i class="fas fa-map-marker-alt"></i> <?php echo $data['links']['address']['title'];?></small></a>
            <?php
                if(count($data['links']['facebook']) > 0) {
                    echo '<a href="' . $data['links']['facebook']['link'] . '" target="_blank"><small class="text-center text-uppercase mr-4"><i class="fab fa-facebook"></i> ' . $data['links']['facebook']['title'] . '</small></a>';
                }
                if(count($data['links']['website']) > 0) {
                    echo '<a href="' . $data['links']['website']['link'] . '" target="_blank"><small class="text-center mr-4"><i class="fas fa-globe"></i> ' . $data['links']['website']['title'] . '</small></a>';
                }
                if(count($data['links']['facebook']) > 0 && count($data['links']['website']) > 0) {
                    echo '<br>';
                }
            ?>
            <a href="mailto:<?php echo $data['email'];?>" target="_blank">
            <small class="text-center mr-4"><i class="fas fa-envelope"></i> <?php echo $data['email'];?></small></a>
            <br><br>

            <!-- OVERVIEW -->
            <?php
                if(array_key_exists('overview', $data)) {
                    echo '<h5 class="mb-3 rounded text-uppercase font-weight-bold" id="Overview">Overview of the Campus Library</h5>';
                    foreach($data['overview'] as $desc) {
                        echo '<p class="text-justify" style="line-height: 2.5; text-indent: 100px;">' . $desc . '</p>';
                    }
                    echo '<hr>';
                }
            ?>
            <!-- VISION -->
            <?php
                if(!empty($data['vision'])) {
                    echo '<h5 class="mb-3 rounded text-uppercase font-weight-bold" id="Vision">Campus Library Vision</h5>';
                    echo '<p class="text-justify" style="line-height: 2.5; text-indent: 100px;">' . $data['vision'] . '</p><hr>';
                }
            ?>
            <!-- MISSION -->
            <?php
                if(!empty($data['mission'])) {
                    echo '<h5 class="mb-3 rounded text-uppercase font-weight-bold" id="Mission">Campus Library Mission</h5>';
                    echo '<p class="text-justify" style="line-height: 2.5; text-indent: 100px;">' . $data['mission'] . '</p><hr>';
                }
            ?>
            <!-- GOALS -->
            <?php
                if(count($data['goals']) > 0) {
                    echo '<h5 class="mb-3 rounded text-uppercase font-weight-bold" id="Goals">Campus Library Goals</h5>';
                    echo '<ol style="line-height: 2.5;">';
                    foreach($data['goals'] as $goal) {
                        echo '<li>' . $goal . '</li>';
                    }
                    echo '</ol><hr>';
                }
            ?>
            <!-- OBJECTIVES -->
            <?php
                if(count($data['objectives']) > 0) {
                    echo '<h5 class="mb-3 rounded text-uppercase font-weight-bold" id="Objectives">Campus Library Objectives</h5>';
                    echo '<ol style="line-height: 2.5;">';
                    foreach($data['objectives'] as $objective) {
                        echo '<li>' . $objective . '</li>';
                    }
                    echo '</ol><hr>';
                }
            ?>
            <!-- BUILDING DIRECTORY -->
            <?php
                if(array_key_exists('building', $data)) {
                    echo '<h5 class="mb-3 rounded text-uppercase font-weight-bold" id="BuildingDirectory">Ladislao N. Diwa Memorial Library (LNDML) Building Directory:</h5>';
                    $i = 0;
                    foreach($data['building'] as $floor) {
                        echo '<h6 class="text-uppercase font-weight-bold">' . $floor['label'] . '</h6>';
                        echo '<ul style="line-height: 2.5; margin-left: 30px;">';
                        if($i != 3) {
                            foreach($floor['children'] as $child) {
                                echo '<li>' . $child . '</li>';
                                
                            }
                        } else {
                            foreach($floor['children'] as $child) {
                                echo '<li>' . $child['label'] . '</li>';
                                echo '<ul>';
                                foreach($child['children'] as $sub) {
                                    echo '<li>' . $sub . '</li>';
                                }
                                echo '</ul>';
                            }
                        }
                        echo '</ul>';
                        $i++;
                    }
                    echo '<hr>';
                }
            ?>
            <?php
                if(array_key_exists('personnels', $data)) {
                    echo '<h5 class="mb-3 rounded text-uppercase font-weight-bold" id="Personnel">Library Personnel</h5>';
                    echo '<div class="row">';
                    $count = 0;
                    $avatar = null;
                    foreach($data['personnels'] as $personnel) {
                        if(!is_null($personnel['avatar'])) {
                            $avatar = '<img src="' . $personnel['avatar'] . '" alt="' . $personnel['name'] . ' - ' . $personnel['position'] . '">';
                        }
                        echo '
                            <div class="col-lg-3 col-md-6 col-12 me-3 mb-3">
                                <div class="card shadow-sm h-100">
                                    ' . $avatar . '
                                    <div class="card-body">
                                    <h6 class="card-title">' . $personnel['name'] . '</h6>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">' . $personnel['position'] . '</small>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                    echo '</div><hr>';
                }
            ?>
            <?php
                if(count($data['statistics']) > 0) {
                    echo '<h5 class="mb-3 rounded text-uppercase font-weight-bold" id="Statistics">Statistics</h5>';
                    echo '<div class="row">';
                    foreach($data['statistics'] as $stats) {
                        echo '
                            <div class="col-lg-3 col-md-6 col-12 mb-3">
                                <div class="card shadow-sm h-100">
                                    <h5 class="w-100 py-2 px-3 m-0 rounded text-white text-center text-uppercase ils-bg-green" style="font-size: auto !important;">' . $stats['title'] . '</h5>
                                    <div class="p-5 px-3 rounded mb-3 text-center text-uppercase bg-white">
                                        <h1 class="font-weight-bold">' . $stats['count'] . '</h1>
                                        <p class="text-muted font-weight-bold">' . $stats['subtitle'] . '</p>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                    echo '</div><hr>';
                }
            ?>

            <h5 class="mb-3 rounded text-uppercase font-weight-bold" id="Gallery">Gallery</h5>
            <div class="tz-gallery">
                <div class="row">
                    <?php
                        $i = 0;
                        foreach($data['gallery'] as $image) {
                            // if($i == 3) {
                            //     echo '
                            //         <div class="col-sm-12 col-md-8">
                            //             <a class="lightbox" href="' . $image . '">
                            //                 <img src="' . $image . '" alt="">
                            //             </a>
                            //         </div>
                            //     ';
                            // } else {
                                echo '
                                    <div class="col-sm-6 col-md-4">
                                        <a class="lightbox" href="' . $image . '">
                                            <img src="' . $image . '">
                                        </a>
                                    </div>
                                ';
                            //}
                            //$i++;
                        }
                    ?>
                    <!-- <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="storage/images/backgrounds/CCAT-3.jpg">
                            <img src="storage/images/backgrounds/CCAT-3.jpg" alt="Coast">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/coast.jpg">
                            <img src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/coast.jpg" alt="Rails">
                        </a>
                    </div>  -->
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
            <script>
                baguetteBox.run('.tz-gallery');
            </script>
            <hr>
            
            <?php
                if(count($data['links']['aboutsite']) > 0 || count($data['links']['website']) > 0 || count($data['links']['facebook']) > 0 || count($data['links']['webopac']) > 0) {
                    echo '<h5 class="mb-3 rounded text-uppercase font-weight-bold" id="Links">Links</h5>';
                    echo '<ul>';
                    if(count($data['links']['aboutsite']) > 0) {
                        echo '<li><a href="' . $data['links']['aboutsite']['link'] . '" target="_blank">' . $data['links']['aboutsite']['title'] . '</a></li>';
                    }
                    if(count($data['links']['website']) > 0) {
                        echo '<li><a href="' . $data['links']['website']['link'] . '" target="_blank">' . $data['links']['website']['title'] . '</a></li>';
                    }
                    if(count($data['links']['webopac']) > 0) {
                        echo '<li><a href="' . $data['links']['webopac']['link'] . '" target="_blank">' . $data['links']['webopac']['title'] . '</a></li>';
                    }
                    if(count($data['links']['facebook']) > 0) {
                        echo '<li><a href="' . $data['links']['facebook']['link'] . '" target="_blank"><i class="fab fa-facebook"></i> ' . $data['links']['facebook']['title'] . ' Facebook Page</a></li>';
                    }
                    echo '</ul>';
                    echo '<hr>';
                }
            ?>
            
            <h5 class="mb-3 rounded text-uppercase font-weight-bold" id="Others">Others</h5>
            <?php
                if(count($data['links']['facebook']) > 0) {
                    echo '
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0" nonce="acdBmzdp"></script>
                        <div class="fb-page" data-href="' . $data['others']['facebook']['link'] . '" data-tabs="timeline" data-width="500" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="' . $data['others']['facebook']['link'] . '" class="fb-xfbml-parse-ignore"><a href="' . $data['others']['facebook']['link'] . '">' . $data['others']['facebook']['title'] . '</a></blockquote></div>
                        <br><br>
                    ';
                }
            ?>
            <div class="mapouter w-100">
                <div class="gmap_canvas">
                    <iframe width="100%" height="500" id="gmap_canvas" src="<?php echo $data['others']['googlemaps']['link'];?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>