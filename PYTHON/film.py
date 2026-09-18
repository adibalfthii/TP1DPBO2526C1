class Film:
    #konstruktor
    def __init__(self, id:str, judul:str, genre:str, durasi:int, path_gambar:str):
        self.__id = str(id)
        self.__judul = str(judul)
        self.__genre = str(genre)
        self.__durasi = int(durasi)
        self.__path_gambar = str(path_gambar)

    #getter
    def getId(self) -> str:
        return self.__id
    
    def getJudul(self) -> str:
        return self.__judul
    
    def getGenre(self) -> str:
        return self.__genre
    
    def getDurasi(self) -> int:
        return self.__durasi
    
    def getPathGambar(self) -> str:
        return self.__path_gambar

    #setter
    def setId(self, id:str) -> None:
        self.__id = str(id)
        
    def setJudul(self, judul:str) -> None:
        self.__judul = str(judul)
        
    def setGenre(self, genre:str) -> None:
        self.__genre = str(genre)
        
    def setDurasi(self, durasi:int) -> None:
        self.__durasi = int(durasi)
        
    def setPathGambar(self, path_gambar:str) -> None:
        self.__path_gambar = str(path_gambar)