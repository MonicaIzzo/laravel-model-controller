                <div class="col">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ $movie->title }}</strong></h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Titolo originale:
                                <em>{{ $movie->original_title }}</em>
                            </h6>
                            <p class="card-text">Nazione:<strong> {{ $movie->nationality }}</strong></p>
                            <p class="card-text">Data di uscita: <strong>{{ $movie->date }}</strong></p>
                            <p class="card-text">Voto: <strong>{{ $movie->vote }}</strong></p>
                        </div>
                    </div>
                </div>
