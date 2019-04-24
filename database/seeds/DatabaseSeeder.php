<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    // $this->call(UsersTableSeeder::class);
    $users = [
      ['name' => 'Rogene Cris Violeta', 'email' => 'rogenecris.violeta@flatworld.com.ph', 'password' => 'admin123'],
      ['name' => 'Administrator', 'email' => 'admin@example.com', 'password' => '!admin123456']
    ];

    foreach ($users as $key => $row) {
      App\User::create([
        'name' => $row['name'],
        'email' => $row['email'],
        'password' => bcrypt($row['password'])
      ]);
    }

    $employees = [
      ['emp_id' => 13694, 'last_name' => 'Cabangon', 'first_name' => 'Richie', 'project' => 'Account Manager'],
      ['emp_id' => 14416, 'last_name' => 'Clao', 'first_name' => 'Althea Sajeda', 'project' => 'Allianz'],
      ['emp_id' => 14309, 'last_name' => 'Peñaflorida', 'first_name' => 'Carlo', 'project' => 'Allianz'],
      ['emp_id' => 14344, 'last_name' => 'Visande', 'first_name' => 'Lovely Jane', 'project' => 'Allianz'],
      ['emp_id' => 14308, 'last_name' => 'Yap', 'first_name' => 'Ely Jose Perseus', 'project' => 'Allianz'],
      ['emp_id' => 13927, 'last_name' => 'Chua', 'first_name' => 'Kiara', 'project' => 'Blair Online'],
      ['emp_id' => 14894, 'last_name' => 'Go', 'first_name' => 'Thomas Bryant', 'project' => 'Blair Online'],
      ['emp_id' => 13587, 'last_name' => 'Lim', 'first_name' => 'Honey Grace', 'project' => 'Blair Online'],
      ['emp_id' => 13824, 'last_name' => 'Zerrudo', 'first_name' => 'Gazelle Haydee', 'project' => 'Blair Online'],
      ['emp_id' => 14667, 'last_name' => 'Fuertes', 'first_name' => 'Michael Bon', 'project' => 'Boxwood'],
      ['emp_id' => 13328, 'last_name' => 'Manlangit', 'first_name' => 'Juvil', 'project' => 'Boxwood'],
      ['emp_id' => 10149, 'last_name' => 'Salanio', 'first_name' => 'Kristine', 'project' => 'Boxwood'],
      ['emp_id' => 13537, 'last_name' => 'Tohoy', 'first_name' => 'Raymart', 'project' => 'Boxwood'],
      ['emp_id' => 12919, 'last_name' => 'Bastian', 'first_name' => 'Aiza', 'project' => 'Breadbar'],
      ['emp_id' => 12896, 'last_name' => 'Aldeguer', 'first_name' => 'Geradel', 'project' => 'CAD'],
      ['emp_id' => 12142, 'last_name' => 'Barili', 'first_name' => 'Mary Jane', 'project' => 'Chat Support'],
      ['emp_id' => 10219, 'last_name' => 'Galanza', 'first_name' => 'Armie Jane', 'project' => 'Chat Support'],
      ['emp_id' => 10259, 'last_name' => 'Gatuslao', 'first_name' => 'Vincent Roy', 'project' => 'Chat Support'],
      ['emp_id' => 10276, 'last_name' => 'Martinez', 'first_name' => 'Bimbo', 'project' => 'Chat Support'],
      ['emp_id' => 14208, 'last_name' => 'Batoon', 'first_name' => 'James Philip', 'project' => 'Copado'],
      ['emp_id' => 13320, 'last_name' => 'Bueno', 'first_name' => 'Mark Chrizantine', 'project' => 'Copado'],
      ['emp_id' => 13349, 'last_name' => 'Lawas', 'first_name' => 'Jake Mitchell', 'project' => 'Copado'],
      ['emp_id' => 13753, 'last_name' => 'Peligrino', 'first_name' => 'Mar Lloyd', 'project' => 'Copado'],
      ['emp_id' => 13197, 'last_name' => 'Velez', 'first_name' => 'Meljoy', 'project' => 'Copado'],
      ['emp_id' => 13994, 'last_name' => 'Amahin', 'first_name' => 'Charlene Joy', 'project' => 'DHD'],
      ['emp_id' => 14697, 'last_name' => 'Ponce, Jr.', 'first_name' => 'Romeo', 'project' => 'DHD'],
      ['emp_id' => 14621, 'last_name' => 'Arsenio', 'first_name' => 'Christofer Kevin', 'project' => 'Flatworld-CS'],
      ['emp_id' => 13755, 'last_name' => 'Borja', 'first_name' => 'Maria Kristina', 'project' => 'Flatworld-CS'],
      ['emp_id' => 13888, 'last_name' => 'Ilag-ilag', 'first_name' => 'Irish', 'project' => 'Flatworld-CS'],
      ['emp_id' => 14176, 'last_name' => 'Monapco', 'first_name' => 'Cesar III', 'project' => 'Flatworld-CS'],
      ['emp_id' => 14721, 'last_name' => 'Pag-ong', 'first_name' => 'Jeric Boy', 'project' => 'Flatworld-CS'],
      ['emp_id' => 12376, 'last_name' => 'Perez', 'first_name' => 'Emerald Jonah', 'project' => 'Flatworld-CS'],
      ['emp_id' => 13259, 'last_name' => 'Quirante', 'first_name' => 'Mae Mosette', 'project' => 'Flatworld-CS'],
      ['emp_id' => 12313, 'last_name' => 'Rivera', 'first_name' => 'Mary Stephanie', 'project' => 'Flatworld-CS'],
      ['emp_id' => 11241, 'last_name' => 'Valerio', 'first_name' => 'Nikki Jay', 'project' => 'Flatworld-CS'],
      ['emp_id' => 15308, 'last_name' => 'Alisoso', 'first_name' => 'Mercedes Lyn', 'project' => 'Gatsby'],
      ['emp_id' => 15287, 'last_name' => 'Alvar', 'first_name' => 'Marc Jeru', 'project' => 'Gatsby'],
      ['emp_id' => 15336, 'last_name' => 'Apostol', 'first_name' => 'Ronette Ann', 'project' => 'Gatsby'],
      ['emp_id' => 15333, 'last_name' => 'Basis', 'first_name' => 'Jiecel Jean', 'project' => 'Gatsby'],
      ['emp_id' => 14072, 'last_name' => 'Buccat', 'first_name' => 'Lorena May', 'project' => 'Gatsby'],
      ['emp_id' => 15283, 'last_name' => 'Carmona', 'first_name' => 'Glenn', 'project' => 'Gatsby'],
      ['emp_id' => 15334, 'last_name' => 'Cordero', 'first_name' => 'Elmer', 'project' => 'Gatsby'],
      ['emp_id' => 15325, 'last_name' => 'Creer', 'first_name' => 'Renalyn', 'project' => 'Gatsby'],
      ['emp_id' => 15326, 'last_name' => 'Divinagracia', 'first_name' => 'Joseph', 'project' => 'Gatsby'],
      ['emp_id' => 15331, 'last_name' => 'Dumangcas', 'first_name' => 'Jessie', 'project' => 'Gatsby'],
      ['emp_id' => 14024, 'last_name' => 'Esguera', 'first_name' => 'Dweezil', 'project' => 'Gatsby'],
      ['emp_id' => 14076, 'last_name' => 'Galupe', 'first_name' => 'Isiah Jeremy', 'project' => 'Gatsby'],
      ['emp_id' => 15122, 'last_name' => 'Gemoto', 'first_name' => 'Merlin Daryl', 'project' => 'Gatsby'],
      ['emp_id' => 15130, 'last_name' => 'Jaso', 'first_name' => 'Dwayne Matthew', 'project' => 'Gatsby'],
      ['emp_id' => 15284, 'last_name' => 'Loo', 'first_name' => 'Vincent James', 'project' => 'Gatsby'],
      ['emp_id' => 14087, 'last_name' => 'Magomnang', 'first_name' => 'Abdensa', 'project' => 'Gatsby'],
      ['emp_id' => 15328, 'last_name' => 'Maneja', 'first_name' => 'Febie Ann', 'project' => 'Gatsby'],
      ['emp_id' => 13178, 'last_name' => 'Paco', 'first_name' => 'Haidee', 'project' => 'Gatsby'],
      ['emp_id' => 15019, 'last_name' => 'Puti', 'first_name' => 'Ajar', 'project' => 'Gatsby'],
      ['emp_id' => 15329, 'last_name' => 'Rendon', 'first_name' => 'Regina Althea', 'project' => 'Gatsby'],
      ['emp_id' => 15330, 'last_name' => 'Salem', 'first_name' => 'Katren Dianne', 'project' => 'Gatsby'],
      ['emp_id' => 14033, 'last_name' => 'Tandingan', 'first_name' => 'Odessa II', 'project' => 'Gatsby'],
      ['emp_id' => 15279, 'last_name' => 'Tolentino', 'first_name' => 'Rosemarie', 'project' => 'Gatsby'],
      ['emp_id' => 15335, 'last_name' => 'Tupaz', 'first_name' => 'Juar', 'project' => 'Gatsby'],
      ['emp_id' => 14767, 'last_name' => 'Alonzo', 'first_name' => 'Stephanie Joy', 'project' => 'Haven'],
      ['emp_id' => 10237, 'last_name' => 'Benavidez', 'first_name' => 'Bryan Mark', 'project' => 'Haven'],
      ['emp_id' => 15149, 'last_name' => 'Kampang', 'first_name' => 'Abdul Warith', 'project' => 'Haven'],
      ['emp_id' => 13696, 'last_name' => 'Valle', 'first_name' => 'Gwendolyn', 'project' => 'Haven'],
      ['emp_id' => 13711, 'last_name' => 'Cambas', 'first_name' => 'Charmaine', 'project' => 'House of Herrera'],
      ['emp_id' => 11660, 'last_name' => 'Cubelo', 'first_name' => 'Helen Jr.', 'project' => 'House of Herrera'],
      ['emp_id' => 13620, 'last_name' => 'Jocson', 'first_name' => 'Girard Alain', 'project' => 'House of Herrera'],
      ['emp_id' => 13932, 'last_name' => 'Lloren', 'first_name' => 'Kimberly Anne', 'project' => 'House of Herrera'],
      ['emp_id' => 12370, 'last_name' => 'Santillan', 'first_name' => 'John Henry', 'project' => 'House of Herrera'],
      ['emp_id' => 14175, 'last_name' => 'Tan', 'first_name' => 'Christian Charles', 'project' => 'House of Herrera'],
      ['emp_id' => 13520, 'last_name' => 'Jalon', 'first_name' => 'Sheila Mae', 'project' => 'IguanaMed'],
      ['emp_id' => 14801, 'last_name' => 'Alabdullah', 'first_name' => 'Ziad', 'project' => 'Lifestyle'],
      ['emp_id' => 12759, 'last_name' => 'Campaner', 'first_name' => 'Abraham Bry', 'project' => 'Lifestyle'],
      ['emp_id' => 13155, 'last_name' => 'Catanyag', 'first_name' => 'Loren', 'project' => 'Lifestyle'],
      ['emp_id' => 13796, 'last_name' => 'Dalimbang', 'first_name' => 'Norainie', 'project' => 'Lifestyle'],
      ['emp_id' => 13797, 'last_name' => 'Gemelo', 'first_name' => 'Lea', 'project' => 'Lifestyle'],
      ['emp_id' => 13970, 'last_name' => 'Kabwe', 'first_name' => 'Simon', 'project' => 'Lifestyle'],
      ['emp_id' => 13799, 'last_name' => 'Malisa', 'first_name' => 'Harold John', 'project' => 'Lifestyle'],
      ['emp_id' => 13180, 'last_name' => 'Ompoc', 'first_name' => 'Jane', 'project' => 'Lifestyle'],
      ['emp_id' => 14249, 'last_name' => 'Shyaka', 'first_name' => 'Innocent', 'project' => 'Lifestyle'],
      ['emp_id' => 15553, 'last_name' => 'Assaf', 'first_name' => 'Fady', 'project' => 'Lifestyle'],
      ['emp_id' => 14048, 'last_name' => 'Nkeunan', 'first_name' => 'Cyrille', 'project' => 'Lifestyle'],
      ['emp_id' => 12673, 'last_name' => 'Alforque', 'first_name' => 'Christian Lee', 'project' => 'Rebtel'],
      ['emp_id' => 12944, 'last_name' => 'Alianza', 'first_name' => 'Ian Samuel', 'project' => 'Rebtel'],
      ['emp_id' => 12454, 'last_name' => 'Aradje', 'first_name' => 'Mark Louie', 'project' => 'Rebtel'],
      ['emp_id' => 12248, 'last_name' => 'Banglos', 'first_name' => 'Edison', 'project' => 'Rebtel'],
      ['emp_id' => 14120, 'last_name' => 'Bulingit', 'first_name' => 'Ryan', 'project' => 'Rebtel'],
      ['emp_id' => 13064, 'last_name' => 'Cadungon', 'first_name' => 'Mark Lowell', 'project' => 'Rebtel'],
      ['emp_id' => 12770, 'last_name' => 'Canillo', 'first_name' => 'Gabriel', 'project' => 'Rebtel'],
      ['emp_id' => 13152, 'last_name' => 'Cardeño', 'first_name' => 'Lorie Jane', 'project' => 'Rebtel'],
      ['emp_id' => 12049, 'last_name' => 'Casas', 'first_name' => 'Delord Dave', 'project' => 'Rebtel'],
      ['emp_id' => 12429, 'last_name' => 'Dela Calzada', 'first_name' => 'Monaliza', 'project' => 'Rebtel'],
      ['emp_id' => 13083, 'last_name' => 'Diaz', 'first_name' => 'Mark Anthony', 'project' => 'Rebtel'],
      ['emp_id' => 15027, 'last_name' => 'Galindo Romero', 'first_name' => 'Jose Luis', 'project' => 'Rebtel'],
      ['emp_id' => 15299, 'last_name' => 'Gutierrez Altamirano', 'first_name' => 'Jessica Paola', 'project' => 'Rebtel'],
      ['emp_id' => 13411, 'last_name' => 'Jimenez', 'first_name' => 'Rodalyn', 'project' => 'Rebtel'],
      ['emp_id' => 14002, 'last_name' => 'Lagamao', 'first_name' => 'Michelle', 'project' => 'Rebtel'],
      ['emp_id' => 14872, 'last_name' => 'Malon', 'first_name' => 'Jef Karl', 'project' => 'Rebtel'],
      ['emp_id' => 15050, 'last_name' => 'Molina', 'first_name' => 'Reynald', 'project' => 'Rebtel'],
      ['emp_id' => 14166, 'last_name' => 'Moungare', 'first_name' => 'Jean-Francois', 'project' => 'Rebtel'],
      ['emp_id' => 13151, 'last_name' => 'Rivera', 'first_name' => 'Ariel', 'project' => 'Rebtel'],
      ['emp_id' => 13062, 'last_name' => 'Taborada', 'first_name' => 'Eva', 'project' => 'Rebtel'],
      ['emp_id' => 13550, 'last_name' => 'Villanueva', 'first_name' => 'Luz Andrea', 'project' => 'Rebtel'],
      ['emp_id' => 12474, 'last_name' => 'Villareal', 'first_name' => 'Kristin', 'project' => 'Rebtel'],
      ['emp_id' => 10014, 'last_name' => 'Dagooc', 'first_name' => 'Jonalyn', 'project' => 'REO'],
      ['emp_id' => 10154, 'last_name' => 'Doromal', 'first_name' => 'Jochel John', 'project' => 'REO'],
      ['emp_id' => 10018, 'last_name' => 'Rios', 'first_name' => 'Jacquilyn', 'project' => 'REO'],
      ['emp_id' => 10058, 'last_name' => 'Tabar', 'first_name' => 'Aiza', 'project' => 'REO'],
      ['emp_id' => 10006, 'last_name' => 'Tocmo', 'first_name' => 'Hilda', 'project' => 'REO'],
      ['emp_id' => 10312, 'last_name' => 'Catubig', 'first_name' => 'Harvey', 'project' => 'Service Delivery'],
      ['emp_id' => 13948, 'last_name' => 'Aclaracion', 'first_name' => 'Ivy Rose', 'project' => 'SOR Concierge'],
      ['emp_id' => 11030, 'last_name' => 'Cabantug', 'first_name' => 'Dennis', 'project' => 'SOR Concierge'],
      ['emp_id' => 13947, 'last_name' => 'Dalupan', 'first_name' => 'Jimver', 'project' => 'SOR Concierge'],
      ['emp_id' => 13868, 'last_name' => 'Dela Torre', 'first_name' => 'Flornil', 'project' => 'SOR Concierge'],
      ['emp_id' => 13869, 'last_name' => 'Gudes', 'first_name' => 'Kiselyn Joy', 'project' => 'SOR Concierge'],
      ['emp_id' => 14003, 'last_name' => 'Lumbala', 'first_name' => 'Paul', 'project' => 'SOR Concierge'],
      ['emp_id' => 14585, 'last_name' => 'Alfaro', 'first_name' => 'Cortez Jr.', 'project' => 'SORCC'],
      ['emp_id' => 13324, 'last_name' => 'Alucilja', 'first_name' => 'Russel Joy', 'project' => 'SORCC'],
      ['emp_id' => 14452, 'last_name' => 'Antonio', 'first_name' => 'Juniora', 'project' => 'SORCC'],
      ['emp_id' => 14963, 'last_name' => 'Bancil', 'first_name' => 'Carlo', 'project' => 'SORCC'],
      ['emp_id' => 14168, 'last_name' => 'Bartolome', 'first_name' => 'Bernabe Jr.', 'project' => 'SORCC'],
      ['emp_id' => 14584, 'last_name' => 'Baud', 'first_name' => 'Kenneth', 'project' => 'SORCC'],
      ['emp_id' => 15008, 'last_name' => 'Bonghanoy', 'first_name' => 'John Gabriel', 'project' => 'SORCC'],
      ['emp_id' => 14337, 'last_name' => 'Bouffard', 'first_name' => 'Rosalie April', 'project' => 'SORCC'],
      ['emp_id' => 15251, 'last_name' => 'Bragat', 'first_name' => 'Louise Darlene', 'project' => 'SORCC'],
      ['emp_id' => 12601, 'last_name' => 'Butron', 'first_name' => 'Glenn', 'project' => 'SORCC'],
      ['emp_id' => 14624, 'last_name' => 'Cinas', 'first_name' => 'Theresa Joy', 'project' => 'SORCC'],
      ['emp_id' => 15258, 'last_name' => 'Cordero', 'first_name' => 'Lourdes Carmela', 'project' => 'SORCC'],
      ['emp_id' => 14587, 'last_name' => 'Cortes', 'first_name' => 'Maria Rhodora', 'project' => 'SORCC'],
      ['emp_id' => 15363, 'last_name' => 'Daraug', 'first_name' => 'Rondec', 'project' => 'SORCC'],
      ['emp_id' => 12879, 'last_name' => 'De Castro', 'first_name' => 'Lorie Mae', 'project' => 'SORCC'],
      ['emp_id' => 13325, 'last_name' => 'Deguito', 'first_name' => 'Janice', 'project' => 'SORCC'],
      ['emp_id' => 14964, 'last_name' => 'Escabillas', 'first_name' => 'Vince Paolo', 'project' => 'SORCC'],
      ['emp_id' => 15266, 'last_name' => 'Eslais', 'first_name' => 'Gesselle', 'project' => 'SORCC'],
      ['emp_id' => 13926, 'last_name' => 'Espinosa', 'first_name' => 'Miguel Angelo', 'project' => 'SORCC'],
      ['emp_id' => 14797, 'last_name' => 'Faisal', 'first_name' => 'Abdul Basit', 'project' => 'SORCC'],
      ['emp_id' => 13217, 'last_name' => 'Formentera', 'first_name' => 'Armand Ryan', 'project' => 'SORCC'],
      ['emp_id' => 14329, 'last_name' => 'Fuasan', 'first_name' => 'R-R', 'project' => 'SORCC'],
      ['emp_id' => 12405, 'last_name' => 'Galan', 'first_name' => 'Frexzy', 'project' => 'SORCC'],
      ['emp_id' => 14338, 'last_name' => 'Garay', 'first_name' => 'Crisanto', 'project' => 'SORCC'],
      ['emp_id' => 15247, 'last_name' => 'Gella', 'first_name' => 'Cyrus Lady', 'project' => 'SORCC'],
      ['emp_id' => 15361, 'last_name' => 'Husmillo', 'first_name' => 'Ian Regin', 'project' => 'SORCC'],
      ['emp_id' => 13835, 'last_name' => 'Ibacarra', 'first_name' => 'Darwin', 'project' => 'SORCC'],
      ['emp_id' => 15362, 'last_name' => 'Idong', 'first_name' => 'Rodgen', 'project' => 'SORCC'],
      ['emp_id' => 13192, 'last_name' => 'Javier', 'first_name' => 'Chanray', 'project' => 'SORCC'],
      ['emp_id' => 15242, 'last_name' => 'Javines', 'first_name' => 'Juneil', 'project' => 'SORCC'],
      ['emp_id' => 15057, 'last_name' => 'Laging', 'first_name' => 'Ronna', 'project' => 'SORCC'],
      ['emp_id' => 14960, 'last_name' => 'Lahora', 'first_name' => 'Francis Peter', 'project' => 'SORCC'],
      ['emp_id' => 13139, 'last_name' => 'Laruya', 'first_name' => 'Ofelia', 'project' => 'SORCC'],
      ['emp_id' => 14336, 'last_name' => 'Laurino', 'first_name' => 'Leah Auggie', 'project' => 'SORCC'],
      ['emp_id' => 15061, 'last_name' => 'Ligad', 'first_name' => 'Mary Cris', 'project' => 'SORCC'],
      ['emp_id' => 15062, 'last_name' => 'Liporada', 'first_name' => 'Jamie', 'project' => 'SORCC'],
      ['emp_id' => 14586, 'last_name' => 'Luis', 'first_name' => 'Pearl Jelsan', 'project' => 'SORCC'],
      ['emp_id' => 13557, 'last_name' => 'Ma', 'first_name' => 'Carlos Jr.', 'project' => 'SORCC'],
      ['emp_id' => 15360, 'last_name' => 'Macaturac', 'first_name' => 'Claude Diane', 'project' => 'SORCC'],
      ['emp_id' => 14626, 'last_name' => 'Maitim', 'first_name' => 'Jerome', 'project' => 'SORCC'],
      ['emp_id' => 12721, 'last_name' => 'Manuel', 'first_name' => 'Airez Madona', 'project' => 'SORCC'],
      ['emp_id' => 15544, 'last_name' => 'Marial', 'first_name' => 'Jacky Lyn', 'project' => 'SORCC'],
      ['emp_id' => 15055, 'last_name' => 'Mendoza', 'first_name' => 'Joel', 'project' => 'SORCC'],
      ['emp_id' => 15267, 'last_name' => 'Mendoza', 'first_name' => 'Mary Jo', 'project' => 'SORCC'],
      ['emp_id' => 12335, 'last_name' => 'Miral', 'first_name' => 'Renjay', 'project' => 'SORCC'],
      ['emp_id' => 14444, 'last_name' => 'Mopun', 'first_name' => 'Mocsin', 'project' => 'SORCC'],
      ['emp_id' => 15058, 'last_name' => 'Murillo', 'first_name' => 'Jaime', 'project' => 'SORCC'],
      ['emp_id' => 14455, 'last_name' => 'Nagar', 'first_name' => 'Noche', 'project' => 'SORCC'],
      ['emp_id' => 13818, 'last_name' => 'Nalupano', 'first_name' => 'Micha', 'project' => 'SORCC'],
      ['emp_id' => 13819, 'last_name' => 'Ochavilla', 'first_name' => 'Joanna Cristy', 'project' => 'SORCC'],
      ['emp_id' => 13512, 'last_name' => 'Oclad', 'first_name' => 'Stephen Jay', 'project' => 'SORCC'],
      ['emp_id' => 13828, 'last_name' => 'Prosianos', 'first_name' => 'Bazil', 'project' => 'SORCC'],
      ['emp_id' => 14505, 'last_name' => 'Robles', 'first_name' => 'Arlene', 'project' => 'SORCC'],
      ['emp_id' => 12403, 'last_name' => 'Rosalijos', 'first_name' => 'Christian', 'project' => 'SORCC'],
      ['emp_id' => 13583, 'last_name' => 'Salido', 'first_name' => 'Yasser', 'project' => 'SORCC'],
      ['emp_id' => 15605, 'last_name' => 'San', 'first_name' => 'Sophia', 'project' => 'SORCC'],
      ['emp_id' => 11608, 'last_name' => 'Sarbues', 'first_name' => 'John Patrick', 'project' => 'SORCC'],
      ['emp_id' => 14330, 'last_name' => 'Sator', 'first_name' => 'Shallainey Kate', 'project' => 'SORCC'],
      ['emp_id' => 13832, 'last_name' => 'Son', 'first_name' => 'Dave', 'project' => ''],
      ['emp_id' => 13779, 'last_name' => 'Sumaliling', 'first_name' => 'John Ryan', 'project' => 'SORCC'],
      ['emp_id' => 14800, 'last_name' => 'Taculin', 'first_name' => 'Helen', 'project' => 'SORCC'],
      ['emp_id' => 12042, 'last_name' => 'Talamor', 'first_name' => 'Leycel', 'project' => 'SORCC'],
      ['emp_id' => 14169, 'last_name' => 'Talidasan', 'first_name' => 'Esmarie', 'project' => 'SORCC'],
      ['emp_id' => 13604, 'last_name' => 'Tomaub', 'first_name' => 'Ma. Sharmaine', 'project' => 'SORCC'],
      ['emp_id' => 15545, 'last_name' => 'Unga', 'first_name' => 'Mohammad Al-Farouk', 'project' => 'SORCC'],
      ['emp_id' => 13485, 'last_name' => 'Varquez', 'first_name' => 'Jesse Mae', 'project' => 'SORCC'],
      ['emp_id' => 15245, 'last_name' => 'Villanueva', 'first_name' => 'Dominic', 'project' => 'SORCC'],
      ['emp_id' => 14335, 'last_name' => 'Zambrano', 'first_name' => 'Christine Joy', 'project' => 'SORCC'],
      ['emp_id' => 12773, 'last_name' => 'Mangua', 'first_name' => 'Ma. Charisse Odelia', 'project' => 'SORCC'],
      ['emp_id' => 15624, 'last_name' => 'Puerto', 'first_name' => 'Ildefonso', 'project' => 'SORCC'],
      ['emp_id' => 15616, 'last_name' => 'Cirilo', 'first_name' => 'Marie Dale', 'project' => 'SORCC'],
      ['emp_id' => 15619, 'last_name' => 'Cabaobao', 'first_name' => 'Jade Kathryn', 'project' => 'SORCC'],
      ['emp_id' => 15617, 'last_name' => 'Dabalos', 'first_name' => 'Jeffrey', 'project' => 'SORCC'],
      ['emp_id' => 15618, 'last_name' => 'Salazar', 'first_name' => 'Jeremy', 'project' => 'SORCC'],
      ['emp_id' => 14929, 'last_name' => 'Acaso', 'first_name' => 'Jeremy Wiliam', 'project' => 'SORNV'],
      ['emp_id' => 13006, 'last_name' => 'Akut', 'first_name' => 'Jonamin', 'project' => 'SORNV'],
      ['emp_id' => 14923, 'last_name' => 'Alqueza', 'first_name' => 'Cleah', 'project' => 'SORNV'],
      ['emp_id' => 14231, 'last_name' => 'Alvarez', 'first_name' => 'Shem', 'project' => 'SORNV'],
      ['emp_id' => 15551, 'last_name' => 'Amor', 'first_name' => 'Leo Arnelle', 'project' => 'SORNV'],
      ['emp_id' => 14928, 'last_name' => 'Awa', 'first_name' => 'Anna Rose', 'project' => 'SORNV'],
      ['emp_id' => 14925, 'last_name' => 'Balilisa', 'first_name' => 'Princess Sherra Lin', 'project' => 'SORNV'],
      ['emp_id' => 15552, 'last_name' => 'Barquin Jr.', 'first_name' => 'Carmelo', 'project' => 'SORNV'],
      ['emp_id' => 12157, 'last_name' => 'Basnillo', 'first_name' => 'Pamela Rose', 'project' => 'SORNV'],
      ['emp_id' => 14927, 'last_name' => 'Betonio', 'first_name' => 'Mark Anthony', 'project' => 'SORNV'],
      ['emp_id' => 14933, 'last_name' => 'Caminade', 'first_name' => 'Jay', 'project' => 'SORNV'],
      ['emp_id' => 14926, 'last_name' => 'Canoy', 'first_name' => 'July Marie', 'project' => 'SORNV'],
      ['emp_id' => 10680, 'last_name' => 'Carvajal', 'first_name' => 'Arnel', 'project' => 'SORNV'],
      ['emp_id' => 15011, 'last_name' => 'Cortez', 'first_name' => 'Joshua Paul', 'project' => 'SORNV'],
      ['emp_id' => 15557, 'last_name' => 'Drama', 'first_name' => 'Hadelle', 'project' => 'SORNV'],
      ['emp_id' => 14958, 'last_name' => 'Gamit', 'first_name' => 'Engelie', 'project' => 'SORNV'],
      ['emp_id' => 14622, 'last_name' => 'Gingging', 'first_name' => 'Harold Peter', 'project' => 'SORNV'],
      ['emp_id' => 11818, 'last_name' => 'Guindulman', 'first_name' => 'May Christine', 'project' => 'SORNV'],
      ['emp_id' => 14939, 'last_name' => 'Higgins', 'first_name' => 'Keith Audrey', 'project' => 'SORNV'],
      ['emp_id' => 14930, 'last_name' => 'Ibañez', 'first_name' => 'Annie Rose', 'project' => 'SORNV'],
      ['emp_id' => 14937, 'last_name' => 'Lagno', 'first_name' => 'Jana Shen', 'project' => 'SORNV'],
      ['emp_id' => 14232, 'last_name' => 'Limba', 'first_name' => 'Jalil Wali', 'project' => 'SORNV'],
      ['emp_id' => 14935, 'last_name' => 'Loayon', 'first_name' => 'Genevive', 'project' => 'SORNV'],
      ['emp_id' => 12085, 'last_name' => 'Macarayo', 'first_name' => 'Bryan', 'project' => 'SORNV'],
      ['emp_id' => 14957, 'last_name' => 'Mascan', 'first_name' => 'Oleria', 'project' => 'SORNV'],
      ['emp_id' => 14165, 'last_name' => 'Navarro', 'first_name' => 'Jemwell', 'project' => 'SORNV'],
      ['emp_id' => 14938, 'last_name' => 'Orong', 'first_name' => 'Jelli Jane', 'project' => 'SORNV'],
      ['emp_id' => 14922, 'last_name' => 'Paredes', 'first_name' => 'Hazel Mae', 'project' => 'SORNV'],
      ['emp_id' => 14180, 'last_name' => 'Ramos', 'first_name' => 'Russel Mark', 'project' => 'SORNV'],
      ['emp_id' => 14934, 'last_name' => 'Salmon', 'first_name' => 'Jeremiah Alfred', 'project' => 'SORNV'],
      ['emp_id' => 14823, 'last_name' => 'Tropico', 'first_name' => 'Charlotte Janine', 'project' => 'SORNV'],
      ['emp_id' => 13065, 'last_name' => 'Aquino', 'first_name' => 'Aura Maybelline', 'project' => 'Team Management'],
      ['emp_id' => 11813, 'last_name' => 'Balan', 'first_name' => 'Katherine', 'project' => 'Team Management'],
      ['emp_id' => 12185, 'last_name' => 'Barroga', 'first_name' => 'Raymark', 'project' => 'Team Management'],
      ['emp_id' => 10050, 'last_name' => 'Cauilan', 'first_name' => 'Edinah', 'project' => 'Team Management'],
      ['emp_id' => 13601, 'last_name' => 'Cenia', 'first_name' => 'Jessa', 'project' => 'Team Management'],
      ['emp_id' => 12892, 'last_name' => 'Cuizon', 'first_name' => 'Eloise Karla', 'project' => 'Team Management'],
      ['emp_id' => 11812, 'last_name' => 'Esperat', 'first_name' => 'Elaine Jane', 'project' => 'Team Management'],
      ['emp_id' => 10266, 'last_name' => 'Macalib-og', 'first_name' => 'Lhea', 'project' => 'Team Management'],
      ['emp_id' => 12722, 'last_name' => 'Maroliña', 'first_name' => 'Zaryll Praise', 'project' => 'Team Management'],
      ['emp_id' => 15278, 'last_name' => 'Nemeño', 'first_name' => 'Evalyn', 'project' => 'Team Management'],
      ['emp_id' => 10255, 'last_name' => 'Otero', 'first_name' => 'Rex', 'project' => 'Team Management'],
      ['emp_id' => 10289, 'last_name' => 'Paterno', 'first_name' => 'Elvin Karl', 'project' => 'Team Management'],
      ['emp_id' => 14143, 'last_name' => 'Rosarial', 'first_name' => 'Chrisdane', 'project' => 'Team Management'],
      ['emp_id' => 10923, 'last_name' => 'Rubillos', 'first_name' => 'Camille', 'project' => 'Team Management'],
      ['emp_id' => 11238, 'last_name' => 'Sanchez', 'first_name' => 'Lester Paul', 'project' => 'Team Management'],
      ['emp_id' => 13998, 'last_name' => 'Subillo', 'first_name' => 'Zandro', 'project' => 'Team Management'],
      ['emp_id' => 13280, 'last_name' => 'Morales', 'first_name' => 'Krishan Venjo', 'project' => 'Tech Armor'],
      ['emp_id' => 13253, 'last_name' => 'Varona', 'first_name' => 'Kimberley', 'project' => 'Tech Armor'],
      ['emp_id' => 13481, 'last_name' => 'Amores', 'first_name' => 'Alfred', 'project' => 'Tech Ventures'],
      ['emp_id' => 13479, 'last_name' => 'Cajes', 'first_name' => 'Carlynda', 'project' => 'Tech Ventures'],
      ['emp_id' => 15273, 'last_name' => 'Cuison', 'first_name' => 'Marychelle', 'project' => 'Tech Ventures'],
      ['emp_id' => 12533, 'last_name' => 'Friginal', 'first_name' => 'Dhon Luis Jr.', 'project' => 'Tech Ventures'],
      ['emp_id' => 15275, 'last_name' => 'Rivera', 'first_name' => 'Raineir Roman', 'project' => 'Tech Ventures'],
      ['emp_id' => 15303, 'last_name' => 'Roldan', 'first_name' => 'Fredelyn', 'project' => 'Tech Ventures'],
      ['emp_id' => 15276, 'last_name' => 'Sulit', 'first_name' => 'Thea Belle', 'project' => 'Tech Ventures'],
      ['emp_id' => 14461, 'last_name' => 'Castromayor', 'first_name' => 'Alexian', 'project' => 'Whitehall'],
      ['emp_id' => 14275, 'last_name' => 'Develleres', 'first_name' => 'Dyan Eloiza', 'project' => 'Whitehall'],
      ['emp_id' => 15023, 'last_name' => 'Cañal', 'first_name' => 'Shancy', 'project' => 'Xavierville'],
      ['emp_id' => 15035, 'last_name' => 'Gadgude', 'first_name' => 'Ronald', 'project' => 'Xavierville'],
      ['emp_id' => 14788, 'last_name' => 'Valenzona', 'first_name' => 'Ana Carmela', 'project' => 'Xavierville'],
    ];

    foreach ($employees as $key => $row) {
      App\Employee::create([
        'emp_id' => $row['emp_id'],
        'first_name' => $row['first_name'],
        'last_name' => $row['last_name'],
        'project' => $row['project'],
      ]);
    }
  }
}
