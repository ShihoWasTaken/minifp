<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css">
 
		<script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').DataTable( {
				    language: {
				        processing:     "Traitement en cours...",
				        search:         "Rechercher&nbsp;:",
				        lengthMenu:    "Afficher _MENU_ &eacute;l&eacute;ments",
				        info:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
				        infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
				        infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
				        infoPostFix:    "",
				        loadingRecords: "Chargement en cours...",
				        zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
				        emptyTable:     "Aucune donnée disponible dans le tableau",
				        paginate: {
				            first:      "Premier",
				            previous:   "Pr&eacute;c&eacute;dent",
				            next:       "Suivant",
				            last:       "Dernier"
				        },
				        aria: {
				            sortAscending:  ": activer pour trier la colonne par ordre croissant",
				            sortDescending: ": activer pour trier la colonne par ordre décroissant"
				        }
				    }
				} );
			} );
		</script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-2 col-md-2">
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Menu 1</a></li>
						<li><a href="#">Menu 2</a></li>
						<li><a href="#">Menu 3</a></li>
					</ul>
				</div>
				<div class="col-xs-10 col-md-10">
					<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				            	<th>ID</th>	<th>age</th>	<th>nom</th>	<th>isMale</th>	<th>IsMale2</th>	<th>age50</th>	<th>password33</th>	<th>IsMale3</th>	<th>age51</th>	<th>password45</th>	<th>password54</th>	<th>newCol</th>	<th>newCo2l</th>	<th>newCo4l</th>	<th>newCol3</th>	<th>newCo54</th>	<th>newCol53</th>				            </tr>
				        </thead>
				        <tbody>
				        <tr>
	<td>1</td>	<td>3</td>	<td>toto</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>2</td>	<td>3</td>	<td>insert</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>3</td>	<td>0</td>	<td>insert</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>4</td>	<td>0</td>	<td>insert</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>5</td>	<td>0</td>	<td>insert</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>6</td>	<td>0</td>	<td>insert</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>7</td>	<td>0</td>	<td>toto</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>8</td>	<td>3</td>	<td>NULL</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>9</td>	<td>0</td>	<td>NULL</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>10</td>	<td>0</td>	<td>toto</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>11</td>	<td>4</td>	<td>toto</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>12</td>	<td>621</td>	<td>qwAwCpLeTv</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>13</td>	<td>339</td>	<td>rLbhUrIOlE</td>	<td>1</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>14</td>	<td>3</td>	<td>Rvsojt0K0B</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>15</td>	<td>133</td>	<td>IFMRwLSo3U</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>16</td>	<td>759</td>	<td>MM4cYzLArj</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>17</td>	<td>428</td>	<td>eIMuyMChrp</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>18</td>	<td>5</td>	<td>NULL</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>19</td>	<td>0</td>	<td>NULL</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>20</td>	<td>0</td>	<td>NULL</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>21</td>	<td>0</td>	<td>NULL</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>22</td>	<td>5</td>	<td>NULL</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>23</td>	<td>0</td>	<td>NULL</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>24</td>	<td>NULL</td>	<td>NULL</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>25</td>	<td>NULL</td>	<td>NULL</td>	<td>1</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>26</td>	<td>NULL</td>	<td>NULL</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>27</td>	<td>NULL</td>	<td>NULL</td>	<td>1</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>28</td>	<td>NULL</td>	<td>NULL</td>	<td>1</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>29</td>	<td>NULL</td>	<td>NULL</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>30</td>	<td>NULL</td>	<td>NULL</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>31</td>	<td>5</td>	<td>NULL</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>32</td>	<td>50</td>	<td>NULL</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>33</td>	<td>50</td>	<td>NULL</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>34</td>	<td>0</td>	<td>NULL</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>35</td>	<td>0</td>	<td>NULL</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>36</td>	<td>0</td>	<td>NULL</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>37</td>	<td>54</td>	<td>NULL</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>38</td>	<td>5</td>	<td>toto</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>39</td>	<td>5</td>	<td>toto</td>	<td>0</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td>	<td>NULL</td></tr>
<tr>
	<td>40</td>	<td>14</td>	<td>fG324WpTJG</td>	<td>0</td>	<td>0</td>	<td>601</td>	<td>sjMphv1HRQ</td>	<td>0</td>	<td>896</td>	<td>MlzRBA7iD9</td>	<td>mAygjfwyQY</td>	<td>SDo98qR0g8</td>	<td>U2ttU531nH</td>	<td>aKhJ0AYx9O</td>	<td>w1rVbAl3BC</td>	<td>bvFFYzK2A8</td>	<td>JKS0tTBsrL</td></tr>
<tr>
	<td>41</td>	<td>273</td>	<td>YNITYjf2UR</td>	<td>0</td>	<td>0</td>	<td>528</td>	<td>Sp5DsFLbqE</td>	<td>0</td>	<td>905</td>	<td>xNmZyDXmlR</td>	<td>kF6nAYA1vt</td>	<td>qB6ShR4Hvg</td>	<td>B34X2DA0ZW</td>	<td>RkCYHcXids</td>	<td>LE4RwlJB2e</td>	<td>REiVClzdmy</td>	<td>adSMcAZaSc</td></tr>
<tr>
	<td>42</td>	<td>628</td>	<td>DRGuo2dZ5s</td>	<td>1</td>	<td>1</td>	<td>762</td>	<td>Mm6mzsUJGN</td>	<td>1</td>	<td>893</td>	<td>nv3fIGTznn</td>	<td>XpBWu4NePA</td>	<td>AWWapQT5Eq</td>	<td>Z1V2hDJac6</td>	<td>y9wa61eTf4</td>	<td>uQ1q0qhUwV</td>	<td>kvXfxeTgp5</td>	<td>nXfT8mUnga</td></tr>
<tr>
	<td>43</td>	<td>447</td>	<td>K0sb0TsVpn</td>	<td>0</td>	<td>1</td>	<td>342</td>	<td>vszoJZu6XJ</td>	<td>0</td>	<td>89</td>	<td>6Usm5U65ni</td>	<td>6gK1F8hztM</td>	<td>13aK2ER0oR</td>	<td>5vMyRRsYXP</td>	<td>g3515L9mkD</td>	<td>8mGj6JYYJn</td>	<td>PPSBnJtQIq</td>	<td>FZuL0zx9VR</td></tr>
<tr>
	<td>44</td>	<td>790</td>	<td>4etnkdljWJ</td>	<td>0</td>	<td>1</td>	<td>604</td>	<td>K9leZ4EF39</td>	<td>0</td>	<td>61</td>	<td>IYdEQ0I4u6</td>	<td>pHsIDbQpNB</td>	<td>y8PycudfDE</td>	<td>jmCx1syKw2</td>	<td>QVJjEnvvNi</td>	<td>6mqWUDq7T4</td>	<td>LdroKsRicn</td>	<td>l3j5nXtSsg</td></tr>
				        </tbody>
				    </table>
				</div>
			</div>
		</div>
	</body>
</html>