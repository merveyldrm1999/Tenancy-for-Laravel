
##  Tenancy-for-Laravel-My-Project Kullanımı

![My animated logo](ReadMe.png)

## API Kullanımı

#### Ana Kullanıcı Giriş İşlemleri

```http
   localhost:8000/login
```

|  | Tip     | Açıklama                |
| :-------- | :------- | :------------------------- |
| `email` | `string` | **Gerekli**. |
| `password` | `string` | **Gerekli**. |

**Sisteme giriş yapıldığında ana kullanıcı hangi subdomain üzerinde kayıtlı ise o subdomaine yönlendirilir. Örneğil kullanıcımız merve olsun ve yildirim subdomaine kayıtlı olsun giriş yapar yapmaz yildirim.localhost:8000/ adresine yönlendirilecek.**




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

**Sisteme yeni bir ana kullanıcı kaydı yapıldığında o kullanıcıya ait bir domain otomatik olarak oluşturulur. Ayrıca o kullanıcıya ait bir şirket de oluşturulmuş olur. Şirkete alt çalışanlar eklemek için Ana kullanıcı girişi yapıp içerdeki register ile alt kullanıcılar eklenmelidir. Örneğin merve kullanıcısı yildirim firmasının yöneticisi yildirim.localhost:8000/register üzerinden alt kullanıcılar ekleyebilir.** 


#### Alt Kullanıcı Kaydı

```http
  subDomain.localhost:8000/register
```

|  | Tip     | Açıklama                |
| :-------- | :------- | :------------------------- |
| `email` | `string` | **Gerekli**.**Unique**. **E-Mail**.  |
| `password` | `string` | **Gerekli**. |
| `name` | `string` | **Gerekli**. | 

**Alt kullanıcı eklendiğinde kullanıcıya Mail ve Sms gönderilir. Bu işlem Kuyruklama ile yapılmaktadır. Ayrıca belirlenen bir slack kanalına mesaj gönderilmektedir. Mesaj içeriği :**:
Merhaba! Aramıza Hoş geldiniz! {{username}}. Mail : {{mail@mail.com}}. Şirket : {{Şirket Adı}}.


 
#### Ana Kullanıcı Blog

```http
   localhost:8000/login
```

|  | Tip     | Açıklama                |
| :-------- | :------- | :------------------------- |
| `title` | `string` | **Gerekli**. |
| `description` | `string` | **Gerekli**. |

**Her subdomain kendine ait blog ekleyebilir.**


