 <div class="dropdown">
     <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
         <i class="bi bi-house"></i> MENU
     </button>
     <div class="mt-4">Connecté en tant que : {{ Auth::user()?->name }}</div>
     <ul class="dropdown-menu">
         <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
         <li><a class="dropdown-item" href="{{ route('admin.slider.liste') }}">Section défilante</a></li>
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
         <li><a class="dropdown-item" href="{{ route('admin.categorie.ajouter') }}">Ajouter une nouvelle catégorie de
                 produit</a></li>

         <li>
             <p class="p-3 pb-0 fw-bold">Contact</p>
         </li>
         <li><a class="dropdown-item" href="{{ route('admin.abonne.liste') }}">Liste des abonnée</a></li>
         <li><a class="dropdown-item" href="{{ route('admin.contact.liste') }}">Message des internautes</a></li>
         <li class="py-2 px-3">
             <form action="/logout" method="post">
                 @csrf
                 <button type="submit" class="btn btn-danger w-100">Deconnexion</button>
             </form>
         </li>
     </ul>
 </div>
