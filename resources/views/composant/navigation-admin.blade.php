 <div class="dropdown">
     <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
         <i class="bi bi-house"></i> MENU
     </button>
     <ul class="dropdown-menu">
         <li><a class="dropdown-item" href="#">Tableau de bord</a></li>
         <li><a class="dropdown-item" href="#">Section défilante</a></li>
         <li>
             <p class="p-3 pb-0 fw-bold">Services</p>
         </li>
         <li><a class="dropdown-item" href="{{ route('admin.service.liste') }}">Liste des services</a></li>
         <li><a class="dropdown-item" href="{{ route('admin.service.ajouter') }}">Ajouter un nouveau service</a></li>

         <li>
             <p class="p-3 pb-0 fw-bold">Produits</p>
         </li>
         <li><a class="dropdown-item" href="{{ route('admin.produit.liste') }}">Liste des produits</a></li>
         <li><a class="dropdown-item" href="{{ route('admin.produit.ajouter') }}">Ajouter un nouveau produit</a></li>
         <li><a class="dropdown-item" href="{{ route('admin.categorie.liste') }}">Liste des catégorie produits</a></li>
         <li><a class="dropdown-item" href="{{ route('admin.categorie.ajouter') }}">Ajouter une nouvelle catégorie de produit</a></li>

         <li>
             <p class="p-3 pb-0 fw-bold">Contact</p>
         </li>
         <li><a class="dropdown-item" href="#">Liste des abonnée</a></li>
         <li><a class="dropdown-item" href="#">Message des internautes</a></li>
     </ul>
 </div>
