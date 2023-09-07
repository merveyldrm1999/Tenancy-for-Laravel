
## Proje Kullanımı

![My animated logo](ReadMe.png)

#### Ana Kullanıcı Giriş İşlemleri

```http
   localhost:8000/login
```

|  | Tip     | Açıklama                |
| :-------- | :------- | :------------------------- |
| `email` | `string` | **Gerekli**. |
| `password` | `string` | **Gerekli**. |

#### Ana Kullanıcı Kayıt

```http
  localhost:8000/register
```

|  | Tip     | Açıklama                |
| :-------- | :------- | :------------------------- |
| `email` | `string` | **Gerekli**. **Unique**. **E-Mail**. |
| `password` | `string` | **Gerekli**. |
| `name` | `string` | **Gerekli**. |
| `domain` | `string` | **Gerekli**. **Unique**. **Türkçe karakter içeremez** |

#### Alt Kullanıcı Kaydı

```http
  subDomain.localhost:8000/register
```

|  | Tip     | Açıklama                |
| :-------- | :------- | :------------------------- |
| `email` | `string` | **Gerekli**.**Unique**. **E-Mail**.  |
| `password` | `string` | **Gerekli**. |
| `name` | `string` | **Gerekli**. | 

 
