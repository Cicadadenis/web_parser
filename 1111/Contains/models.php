<div id="load" class="w3-modal">
  <span class="w3-modal-content">
    <center><div class="loader" id="loader"></div></center>
  </span>
</div>

<div id="addFolder" class="w3-modal w3-display-middle" style="z-index:4">
	<span class="w3-modal-content">
	<center>
	<div class="w3-padding w3-theme w3-round w3-animate-zoom" style="max-width:400px;">
	<div class="">
		<span class="w3-right kel-hover-2" onclick="closeFolderModal()"><i class="fa fa-times"></i></span>
	</div>
	<span class="w3-xlarge">Добавить папку</span>
	<div class="loader" id="loader-fold" style="display:none"></div>
	<div class="w3-text-red" id="error-fold"></div>
		<div class="w3-section">
			<input type="" id="fileName" class="w3-input w3-border" style="width:80%" placeholder="Имя папки">
		</div>
		<div class="w3-section">
			<button class="w3-input w3-border kel-hover-2" onclick="addDir()" style="width:80%">Добавить папку</button>
		</div>
	</div>
	</center>
	</span>
</div>

<div id="renameFile" class="w3-modal w3-display-middle" style="z-index:4">
	<span class="w3-modal-content">
	<center>
	<div class="w3-padding w3-theme w3-round w3-animate-zoom" style="max-width:400px;">
	<div class="">
		<span class="w3-right kel-hover-2" onclick="closeRenameModal()"><i class="fa fa-times"></i></span>
	</div>
	<span class="w3-xlarge">Переименовать</span>
	<div class="loader" id="loader-rename" style="display:none"></div>
	<div class="w3-text-red" id="error-rename"></div>
		<div class="w3-section">
		Старое имя
			<input type="" id="oldName" class="w3-input w3-border" style="width:80%" placeholder="Old name" disabled>
		</div>
		<div class="w3-section">
		Новое имя
			<input type="" id="newName" class="w3-input w3-border" style="width:80%" placeholder="New name">
		</div>
		<div class="w3-section">
			<button class="w3-input kel-hover-2 w3-black" onclick="renameThing()" style="width:80%">Переименовать</button>
		</div>
	</div>
	</center>
	</span>
</div>

<div id="uploadFile" class="w3-modal w3-display-middle" style="z-index:4">
	<span class="w3-modal-content">
	<center>
	<div class="w3-padding w3-theme w3-round w3-animate-zoom" style="max-width:400px;">
	<div class="">
		<span class="w3-right kel-hover-2" onclick="closeUploadFile()"><i class="fa fa-times"></i></span>
	</div>
	<span class="w3-xlarge">Загрузить</span>
	<div class="loader" id="loader-upload" style="display:none"></div>
	<div class="w3-text-red" id="error-upload"></div>
	<form method="post" action="#" enctype="multipart/form-data">
		<input type="file" name="file" id="upl" required/>
		<div class="w3-section">
			<button type="submit" name="submit" class="w3-input kel-hover-2 w3-black" style="width:80%">Загрузить</button>
		</div>
	</form>
	</div>
	</center>
	</span>
</div>

<div id="deleteFile" class="w3-modal w3-display-middle" style="z-index:4">
	<span class="w3-modal-content">
	<center>
	<div class="w3-padding w3-theme w3-round w3-animate-zoom" style="max-width:400px;">
	<div class="">
		<span class="w3-right kel-hover-2" onclick="closeDeleteFileModal()"><i class="fa fa-times"></i></span>
	</div>
	<span class="w3-xlarge">Вы уверены?</span>
	<div class="loader" id="loader-del-file" style="display:none"></div>
	<div class="w3-text-red" id="error-del-file"></div>
	<span>
	Вы действительно хотите удалить <span id="filename_del"></span> файл?
	</span>
		<div class="w3-bar w3-margin-top">
			<button class="w3-bar-item kel-hover-2 w3-light-gray w3-right" onclick="closeDeleteFileModal()" >отменить</button>
			<button class="w3-bar-item kel-hover-2 w3-black w3-right w3-margin-right" onclick="deleteFile()" >да</button>
		</div>
	</div>
	</center>
	</span>
</div>

<div id="deleteFolder" class="w3-modal w3-display-middle" style="z-index:4">
	<span class="w3-modal-content">
	<center>
	<div class="w3-padding w3-theme w3-round w3-animate-zoom" style="max-width:400px;">
	<div class="">
		<span class="w3-right kel-hover-2" onclick="closeDeleteFolderModal()"><i class="fa fa-times"></i></span>
	</div>
	<span class="w3-xlarge">Вы уверены ?</span>
	<div class="loader" id="loader-del-folder" style="display:none"></div>
	<div class="w3-text-red" id="error-del-folder"></div>
	<span>
	Вы действительно хотите удалить <span id="foldername_del"></span> Папка?
	</span>
		<div class="w3-bar w3-margin-top">
			<button class="w3-bar-item kel-hover-2 w3-light-gray w3-right" onclick="closeDeleteFolderModal()" >отменить</button>
			<button class="w3-bar-item kel-hover-2 w3-black w3-right w3-margin-right" onclick="deleteFolder()" >да</button>
		</div>
	</div>
	</center>
	</span>
</div>

<div id="download_File" class="w3-modal w3-display-middle" style="z-index:4">
	<span class="w3-modal-content">
	<center>
	<div class="w3-padding w3-theme w3-round w3-animate-zoom" style="max-width:400px;">
	<div class="">
		<span class="w3-right kel-hover-2" onclick="closeDownloadFileModal()"><i class="fa fa-times"></i></span>
	</div>
	<span class="w3-xlarge">Вы уверены ?</span>
	<div class="loader" id="loader-down-file" style="display:none"></div>
	<div class="w3-text-red" id="error-down-file"></div>
	<span>
	Вы действительно хотите скачать <span id="filename_down"></span> Папка?
	</span>
		<div class="w3-bar w3-margin-top">
			<button class="w3-bar-item kel-hover-2 w3-light-gray w3-right" onclick="closeDownloadFileModal()" > отменить</button>
			<button class="w3-bar-item kel-hover-2 w3-black w3-right w3-margin-right" onclick="downloadFile()" ><i class="fa fa-download"></i> Скачать</button>
		</div>
	</div>
	</center>
	</span>
</div>
