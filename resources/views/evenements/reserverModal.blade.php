  <!-- Modal -->
  <form method="post" action="{{ route('evenements.reserver', $evenement) }}" class="modal fade text-left" id="reserverEvenement{{ $evenement->id }}" tabindex="-1" aria-labelledby="reserverEvenement{{ $evenement->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="reserverEvenement{{ $evenement->id }}">Réserver pour l'évènement {{ $evenement->nom_evenement }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" class="form-control" required>
            @error('prenom') <span class="invalid-feedback"></span>@enderror

          </div>

          @csrf

          <div class="form-group">
            <label for="nom">Nom de famille</label>
            <input type="text" name="nom" id="nom" class="form-control" required>
            @error('nom') <span class="invalid-feedback"></span>@enderror
          </div>

          <div class="form-group">
            <label for="email">Adresse email</label>
            <input type="email" name="email" id="email" class="form-control" required>
            @error('email') <span class="invalid-feedback"></span>@enderror

          </div>

          <div class="form-group">
            <label for="telephone">Numéro de téléphone</label>
            <input type="text" name="telephone" id="telephone" class="form-control" required>
            @error('telephone') <span class="invalid-feedback"></span>@enderror

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-primary">Réserver</button>
        </div>
      </div>
    </div>
  </form>
